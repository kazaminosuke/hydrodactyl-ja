<?php

return [
    'location' => [
        'no_location_found' => '指定された短縮コードに一致するレコードが見つからなかった。',
        'ask_short' => 'ロケーション短縮コード',
        'ask_long' => 'ロケーションの説明',
        'created' => '新しいロケーション(:name)をID :id で作成した。',
        'deleted' => '要求されたロケーションを削除した。',
    ],
    'user' => [
        'search_users' => 'ユーザー名、ユーザーID、またはメールアドレスを入力',
        'select_search_user' => '削除するユーザーのID(再検索する場合は「0」を入力)',
        'deleted' => 'パネルからユーザーを削除した。',
        'confirm_delete' => 'このユーザーをパネルから削除してよいか?',
        'no_users_found' => '指定された検索語に一致するユーザーが見つからなかった。',
        'multiple_found' => '指定されたユーザーに一致するアカウントが複数見つかったため、--no-interaction フラグによりユーザーを削除できない。',
        'ask_admin' => 'このユーザーは管理者か?',
        'ask_email' => 'メールアドレス',
        'ask_username' => 'ユーザー名',
        'ask_name_first' => '名',
        'ask_name_last' => '姓',
        'ask_password' => 'パスワード',
        'ask_password_tip' => 'ランダムなパスワードを生成してユーザーにメールで送信したい場合は、このコマンドを中断(CTRL+C)し、`--no-password` フラグを付けて再実行すること。',
        'ask_password_help' => 'パスワードは8文字以上で、大文字と数字をそれぞれ1文字以上含む必要がある。',
        '2fa_help_text' => [
            'このコマンドは、有効になっている場合、ユーザーアカウントの二段階認証を無効化する。これはユーザーがアカウントからロックアウトされた場合のアカウント復旧手段としてのみ使用すること。',
            '意図しない場合は、CTRL+C を押してこの処理を終了すること。',
        ],
        '2fa_disabled' => ':email の二段階認証を無効化した。',
    ],
    'schedule' => [
        'output_line' => '`:schedule`(:hash)の最初のタスクのジョブをディスパッチ中。',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'サービスバックアップファイル :file を削除中。',
    ],
    'server' => [
        'rebuild_failed' => 'ノード ":node" 上の ":name"(#:id)に対する再構築リクエストがエラーで失敗した: :message',
        'reinstall' => [
            'failed' => 'ノード ":node" 上の ":name"(#:id)に対する再インストールリクエストがエラーで失敗した: :message',
            'confirm' => '複数のサーバーに対して再インストールを実行しようとしている。続行してよいか?',
        ],
        'power' => [
            'confirm' => ':count 台のサーバーに対して :action を実行しようとしている。続行してよいか?',
            'action_failed' => 'ノード ":node" 上の ":name"(#:id)に対する電源操作リクエストがエラーで失敗した: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTPホスト(例: smtp.gmail.com)',
            'ask_smtp_port' => 'SMTPポート',
            'ask_smtp_username' => 'SMTPユーザー名',
            'ask_smtp_password' => 'SMTPパスワード',
            'ask_mailgun_domain' => 'Mailgunドメイン',
            'ask_mailgun_endpoint' => 'Mailgunエンドポイント',
            'ask_mailgun_secret' => 'Mailgunシークレット',
            'ask_mandrill_secret' => 'Mandrillシークレット',
            'ask_postmark_username' => 'Postmark APIキー',
            'ask_driver' => 'メール送信に使用するドライバーはどれか?',
            'ask_mail_from' => 'メールの送信元アドレス',
            'ask_mail_name' => 'メールの送信者名',
            'ask_encryption' => '使用する暗号化方式',
        ],
    ],
];
