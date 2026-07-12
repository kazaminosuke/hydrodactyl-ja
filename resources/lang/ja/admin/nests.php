<?php

return [
    'notices' => [
        'created' => '新しいNest「:name」を作成した。',
        'deleted' => 'パネルから指定されたNestを削除した。',
        'updated' => 'Nestの設定を更新した。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'このEggと関連する変数のインポートに成功した。',
            'updated_via_import' => '指定されたファイルを使用してこのEggを更新した。',
            'deleted' => 'パネルから指定されたEggを削除した。',
            'updated' => 'Eggの設定を更新した。',
            'script_updated' => 'Eggのインストールスクリプトを更新した。サーバーのインストール時に実行される。',
            'egg_created' => '新しいEggの作成に成功した。この新しいEggを適用するには、実行中のデーモンを再起動する必要がある。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '変数「:variable」を削除した。再構築後、サーバーからは利用できなくなる。',
            'variable_updated' => '変数「:variable」を更新した。変更を適用するには、この変数を使用しているサーバーを再構築する必要がある。',
            'variable_created' => '新しい変数を作成し、このEggに割り当てた。',
        ],
    ],
];
