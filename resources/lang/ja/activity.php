<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'ログインに失敗した',
        'success' => 'ログインした',
        'password-reset' => 'パスワードをリセットした',
        'reset-password' => 'パスワードリセットを要求した',
        'checkpoint' => '二段階認証を要求した',
        'recovery-token' => '二段階認証のリカバリートークンを使用した',
        'token' => '二段階認証を突破した',
        'ip-blocked' => '許可されていないIPアドレス :identifier からのリクエストをブロックした',
        'sftp' => [
            'fail' => 'SFTPログインに失敗した',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'メールアドレスを :old から :new に変更した',
            'password-changed' => 'パスワードを変更した',
        ],
        'api-key' => [
            'create' => '新しいAPIキー :identifier を作成した',
            'delete' => 'APIキー :identifier を削除した',
        ],
        'ssh-key' => [
            'create' => 'SSHキー :fingerprint をアカウントに追加した',
            'delete' => 'SSHキー :fingerprint をアカウントから削除した',
        ],
        'two-factor' => [
            'create' => '二段階認証を有効化した',
            'delete' => '二段階認証を無効化した',
        ],
    ],
    'server' => [
        'reinstall' => 'サーバーを再インストールした',
        'console' => [
            'command' => 'サーバー上で ":command" を実行した',
        ],
        'power' => [
            'start' => 'サーバーを起動した',
            'stop' => 'サーバーを停止した',
            'restart' => 'サーバーを再起動した',
            'kill' => 'サーバープロセスを強制終了した',
        ],
        'backup' => [
            'download' => 'バックアップ :name をダウンロードした',
            'delete' => 'バックアップ :name を削除した',
            'restore' => 'バックアップ :name を復元した(削除されたファイル: :truncate)',
            'restore-complete' => 'バックアップ :name の復元を完了した',
            'restore-failed' => 'バックアップ :name の復元に失敗した',
            'start' => '新しいバックアップ :name を開始した',
            'complete' => 'バックアップ :name を完了としてマークした',
            'fail' => 'バックアップ :name を失敗としてマークした',
            'lock' => 'バックアップ :name をロックした',
            'unlock' => 'バックアップ :name のロックを解除した',
        ],
        'database' => [
            'create' => '新しいデータベース :name を作成した',
            'rotate-password' => 'データベース :name のパスワードをローテーションした',
            'delete' => 'データベース :name を削除した',
        ],
        'file' => [
            'compress_one' => ':directory:file を圧縮した',
            'compress_other' => ':directory 内の :count 個のファイルを圧縮した',
            'read' => ':file の内容を閲覧した',
            'copy' => ':file のコピーを作成した',
            'create-directory' => 'ディレクトリ :directory:name を作成した',
            'decompress' => ':directory 内で :files を展開した',
            'delete_one' => ':directory:files.0 を削除した',
            'delete_other' => ':directory 内の :count 個のファイルを削除した',
            'download' => ':file をダウンロードした',
            'pull' => ':url からリモートファイルを :directory にダウンロードした',
            'rename_one' => ':directory:files.0.from を :directory:files.0.to に名前変更した',
            'rename_other' => ':directory 内の :count 個のファイルを名前変更した',
            'write' => ':file に新しい内容を書き込んだ',
            'upload' => 'ファイルのアップロードを開始した',
            'uploaded' => ':directory:file をアップロードした',
        ],
        'sftp' => [
            'denied' => '権限不足によりSFTPアクセスをブロックした',
            'create_one' => ':files.0 を作成した',
            'create_other' => '新しいファイルを :count 個作成した',
            'write_one' => ':files.0 の内容を変更した',
            'write_other' => ':count 個のファイルの内容を変更した',
            'delete_one' => ':files.0 を削除した',
            'delete_other' => ':count 個のファイルを削除した',
            'create-directory_one' => 'ディレクトリ :files.0 を作成した',
            'create-directory_other' => ':count 個のディレクトリを作成した',
            'rename_one' => ':files.0.from を :files.0.to に名前変更した',
            'rename_other' => ':count 個のファイルを名前変更または移動した',
        ],
        'allocation' => [
            'create' => ':allocation をサーバーに追加した',
            'notes' => ':allocation のメモを ":old" から ":new" に更新した',
            'primary' => ':allocation をサーバーのプライマリ割り当てに設定した',
            'delete' => ':allocation の割り当てを削除した',
        ],
        'schedule' => [
            'create' => 'スケジュール :name を作成した',
            'update' => 'スケジュール :name を更新した',
            'execute' => 'スケジュール :name を手動で実行した',
            'delete' => 'スケジュール :name を削除した',
        ],
        'task' => [
            'create' => 'スケジュール :name に新しいタスク ":action" を作成した',
            'update' => 'スケジュール :name のタスク ":action" を更新した',
            'delete' => 'スケジュール :name のタスクを削除した',
        ],
        'settings' => [
            'rename' => 'サーバー名を :old から :new に変更した',
            'description' => 'サーバーの説明を :old から :new に変更した',
        ],
        'startup' => [
            'edit' => '変数 :variable を ":old" から ":new" に変更した',
            'image' => 'サーバーのDockerイメージを :old から :new に更新した',
        ],
        'subuser' => [
            'create' => ':email をサブユーザーとして追加した',
            'update' => ':email のサブユーザー権限を更新した',
            'delete' => ':email をサブユーザーから削除した',
        ],
    ],
];
