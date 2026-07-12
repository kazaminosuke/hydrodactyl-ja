<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信中に例外が発生し、HTTP/:code のレスポンスコードが返された。この例外はログに記録された。',
    'node' => [
        'servers_attached' => 'ノードを削除するには、そのノードに紐づくサーバーが一つも存在しない状態である必要がある。',
        'daemon_off_config_updated' => 'デーモンの設定は<strong>更新された</strong>が、デーモン上の設定ファイルを自動的に更新する際にエラーが発生した。デーモンにこの変更を適用するには、設定ファイル(config.yml)を手動で更新する必要がある。',
    ],
    'allocations' => [
        'server_using' => 'この割り当てには現在サーバーが割り当てられている。割り当てはサーバーが割り当てられていない場合にのみ削除できる。',
        'too_many_ports' => '一度に1000を超えるポートを単一の範囲に追加することはサポートされていない。',
        'invalid_mapping' => ':port に指定されたマッピングが不正であり、処理できなかった。',
        'cidr_out_of_range' => 'CIDR表記では /25 から /32 までのマスクのみが許可されている。',
        'port_out_of_range' => '割り当てのポートは1024より大きく、65535以下である必要がある。',
    ],
    'nest' => [
        'delete_has_servers' => 'アクティブなサーバーが紐づいているNestは、パネルから削除できない。',
        'egg' => [
            'delete_has_servers' => 'アクティブなサーバーが紐づいているEggは、パネルから削除できない。',
            'invalid_copy_id' => 'スクリプトのコピー元として選択されたEggは存在しないか、それ自体がスクリプトをコピーしている。',
            'must_be_child' => 'このEggの「設定のコピー元」ディレクティブは、選択されたNestの子オプションである必要がある。',
            'has_children' => 'このEggは他の一つ以上のEggの親になっている。このEggを削除する前に、それらのEggを削除すること。',
        ],
        'variables' => [
            'env_not_unique' => '環境変数 :name はこのEgg内で一意である必要がある。',
            'reserved_name' => '環境変数 :name は保護されており、変数に割り当てることはできない。',
            'bad_validation_rule' => 'バリデーションルール ":rule" はこのアプリケーションでは有効なルールではない。',
        ],
        'importer' => [
            'json_error' => 'JSONファイルの解析中にエラーが発生した: :error。',
            'file_error' => '指定されたJSONファイルは無効だった。',
            'invalid_json_provided' => '指定されたJSONファイルは認識できる形式ではない。',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分自身のサブユーザーアカウントを編集することは許可されていない。',
        'user_is_owner' => 'サーバーの所有者をこのサーバーのサブユーザーとして追加することはできない。',
        'subuser_exists' => 'そのメールアドレスを持つユーザーは、既にこのサーバーのサブユーザーとして割り当てられている。',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースが紐づいているデータベースホストサーバーは削除できない。',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'チェーンタスクの最大間隔時間は15分である。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなノードが紐づいているロケーションは削除できない。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">ノード #:node</a> のキー失効に失敗した。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動デプロイの要件を満たすノードが見つからなかった。',
        'no_viable_allocations' => '自動デプロイの要件を満たす割り当てが見つからなかった。',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバー上に存在しない。',
    ],
];
