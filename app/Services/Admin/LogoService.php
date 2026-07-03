<?php

namespace Pterodactyl\Services\Admin;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class LogoService
{
    private const HISTORY_MAX = 10;
    private const AVIF_QUALITY = 80;
    private const LOGO_DIR = 'logo';
    private const ALLOWED_MIMES = ['image/png', 'image/jpeg', 'image/gif', 'image/webp', 'image/svg+xml'];

    public function __construct(
        private SettingsRepositoryInterface $settings,
    ) {}

    public function handle(array $data): void
    {
        if (!empty($data['remove'])) {
            $this->remove();
            return;
        }

        if (!empty($data['rewind'])) {
            $this->rewind($data['rewind']);
            return;
        }

        if (!empty($data['logo_url'])) {
            $this->storeLink($data['logo_url']);
            return;
        }

        if (!empty($data['logo_file'])) {
            $this->storeUpload($data['logo_file']);
        }
    }

    private function storeUpload(UploadedFile $file): void
    {
        $mime = $file->getMimeType();

        if ($mime === 'image/svg+xml') {
            $filename = Str::uuid() . '.svg';
            $path = $file->storeAs(self::LOGO_DIR, $filename, 'public');
            $value = self::LOGO_DIR . '/' . $filename;
        } else {
            $filename = Str::uuid() . '.avif';
            $tempPath = $file->getRealPath();

            $image = match ($mime) {
                'image/png' => @imagecreatefrompng($tempPath),
                'image/jpeg' => @imagecreatefromjpeg($tempPath),
                'image/gif' => @imagecreatefromgif($tempPath),
                'image/webp' => @imagecreatefromwebp($tempPath),
                default => null,
            };

            if ($image !== null && function_exists('imageavif')) {
                $storage = Storage::disk('public');
                $storage->makeDirectory(self::LOGO_DIR);
                $storage->put(self::LOGO_DIR . '/' . $filename, '');
                $fullPath = $storage->path(self::LOGO_DIR . '/' . $filename);
                imageavif($image, $fullPath, self::AVIF_QUALITY);
                imagedestroy($image);
                $value = self::LOGO_DIR . '/' . $filename;
            } else {
                if ($image) {
                    imagedestroy($image);
                }
                $value = $file->store(self::LOGO_DIR, 'public');
            }
        }

        $this->addToHistory('upload', $value);
        $this->settings->set('settings::app:logo:type', 'upload');
        $this->settings->set('settings::app:logo:value', $value);
    }

    private function storeLink(string $url): void
    {
        $url = filter_var($url, FILTER_VALIDATE_URL);
        if ($url === false) {
            return;
        }

        $this->addToHistory('link', $url);
        $this->settings->set('settings::app:logo:type', 'link');
        $this->settings->set('settings::app:logo:value', $url);
    }

    private function remove(): void
    {
        $current = $this->settings->get('settings::app:logo:type');
        if ($current === 'upload') {
            $value = $this->settings->get('settings::app:logo:value');
            if ($value) {
                Storage::disk('public')->delete($value);
            }
        }

        $this->settings->set('settings::app:logo:type', null);
        $this->settings->set('settings::app:logo:value', null);
    }

    private function rewind(int $index): void
    {
        $history = $this->getHistory();
        if (!isset($history[$index])) {
            return;
        }

        $entry = $history[$index];
        $this->settings->set('settings::app:logo:type', $entry['type']);
        $this->settings->set('settings::app:logo:value', $entry['value']);
    }

    private function addToHistory(string $type, string $value): void
    {
        $history = $this->getHistory();
        array_unshift($history, ['type' => $type, 'value' => $value]);
        $history = array_slice($history, 0, self::HISTORY_MAX);
        $this->settings->set('settings::app:logo:history', json_encode($history));
    }

    public function getHistory(): array
    {
        $raw = $this->settings->get('settings::app:logo:history');
        if (empty($raw)) {
            return [];
        }

        $decoded = json_decode($raw, true);
        return is_array($decoded) ? $decoded : [];
    }

    public function getCurrentType(): ?string
    {
        return $this->settings->get('settings::app:logo:type');
    }

    public function getCurrentValue(): ?string
    {
        return $this->settings->get('settings::app:logo:value');
    }

    public function getCurrentUrl(): ?string
    {
        $type = $this->getCurrentType();
        $value = $this->getCurrentValue();

        if (empty($value)) {
            return null;
        }

        if ($type === 'upload') {
            return url('storage/' . $value);
        }

        return $value;
    }
}
