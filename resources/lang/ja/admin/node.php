<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '指定されたFQDNまたはIPアドレスは、有効なIPアドレスに解決できない。',
        'fqdn_required_for_ssl' => 'このノードでSSLを使用するには、パブリックIPアドレスに解決される完全修飾ドメイン名が必要である。',
    ],
    'notices' => [
        'allocations_added' => 'このノードに割り当てを追加した。',
        'node_deleted' => 'パネルからノードを削除した。',
        'location_required' => 'ノードを追加するには、あらかじめ少なくとも一つのロケーションを設定しておく必要がある。',
        'node_created' => '新しいノードを作成した。「設定」タブから、このマシン上でデーモンを自動的に設定できる。<strong>サーバーを追加する前に、少なくとも一つのIPアドレスとポートを割り当てる必要がある。</strong>',
        'node_updated' => 'ノード情報を更新した。デーモンの設定を変更した場合、変更を適用するには再起動が必要である。',
        'unallocated_deleted' => '<code>:ip</code> の未割り当てポートをすべて削除した。',
    ],
];
