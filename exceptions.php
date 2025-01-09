<?php

return [
    'daemon_connection_failed' => 'Daemon ile iletişim kurmaya çalışırken bir istisna oluştu ve HTTP/:code yanıt kodu alındı. Bu istisna kaydedildi.',
    'node' => [
        'servers_attached' => 'Bir node, silinmeden önce ona bağlı herhangi bir sunucuya sahip olmamalıdır.',
        'daemon_off_config_updated' => 'Daemon yapılandırması <strong>güncellendi</strong>, ancak yapılandırma dosyasını otomatik olarak güncellemeye çalışırken bir hata oluştu. Bu değişikliklerin uygulanabilmesi için daemon yapılandırma dosyasını (config.yml) manuel olarak güncellemeniz gerekecektir.',
    ],
    'allocations' => [
        'server_using' => 'Bu tahsise şu anda bağlı bir sunucu bulunmaktadır. Bir tahsis yalnızca sunucu bağlı değilse silinebilir.',
        'too_many_ports' => 'Bir seferde tek bir port aralığına 1000\'den fazla port eklenmesi desteklenmez.',
        'invalid_mapping' => ':port için sağlanan eşleme geçersizdi ve işlenemedi.',
        'cidr_out_of_range' => 'CIDR notasyonu yalnızca /25 ile /32 arasındaki maskelere izin verir.',
        'port_out_of_range' => 'Bir tahsisteki portlar 1024\'ten büyük ve 65535\'e eşit veya daha küçük olmalıdır.',
    ],
    'nest' => [
        'delete_has_servers' => 'Aktif sunucuları bağlı bir Nest, Panelden silinemez.',
        'egg' => [
            'delete_has_servers' => 'Aktif sunucuları bağlı bir Egg, Panelden silinemez.',
            'invalid_copy_id' => 'Bir script kopyalamak için seçilen Egg ya mevcut değil ya da zaten bir script kopyalamaktadır.',
            'must_be_child' => 'Bu Egg için "Ayarları Kopyala" talimatı, seçilen Nest için bir alt seçenek olmalıdır.',
            'has_children' => 'Bu Egg, bir veya birden fazla diğer Egg\'in ebeveynidir. Lütfen bu Egg\'i silmeden önce diğer Egg\'leri silin.',
        ],
        'variables' => [
            'env_not_unique' => ':name ortam değişkeni bu Egg için benzersiz olmalıdır.',
            'reserved_name' => ':name ortam değişkeni korumalıdır ve bir değişkene atanamaz.',
            'bad_validation_rule' => '" :rule " doğrulama kuralı bu uygulama için geçerli bir kural değildir.',
        ],
        'importer' => [
            'json_error' => 'JSON dosyasını işlerken bir hata oluştu: :error.',
            'file_error' => 'Sağlanan JSON dosyası geçerli değildi.',
            'invalid_json_provided' => 'Sağlanan JSON dosyası tanınabilir bir formatta değil.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Kendi alt kullanıcı hesabınızı düzenlemenize izin verilmez.',
        'user_is_owner' => 'Sunucu sahibi, bu sunucu için alt kullanıcı olarak eklenemez.',
        'subuser_exists' => 'Bu e-posta adresine sahip bir kullanıcı zaten bu sunucu için alt kullanıcı olarak atanmış.',
    ],
    'databases' => [
        'delete_has_databases' => 'Aktif veritabanlarına bağlı bir veritabanı sunucusu silinemez.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Bir zincirlenmiş görev için maksimum zaman aralığı 15 dakikadır.',
    ],
    'locations' => [
        'has_nodes' => 'Aktif node\'ları bağlı bir konum silinemez.',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Node #:node</a> üzerinde anahtarlar iptal edilemedi. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan node\'lar bulunamadı.',
        'no_viable_allocations' => 'Otomatik dağıtım için gereken gereksinimleri karşılayan tahsisler bulunamadı.',
    ],
    'api' => [
        'resource_not_found' => 'İstenen kaynak bu sunucuda mevcut değil.',
    ],
];
