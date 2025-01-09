<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Sağlanan FQDN veya IP adresi geçerli bir IP adresine çözümlenemiyor.',
        'fqdn_required_for_ssl' => 'Bu düğüm için SSL kullanmak istiyorsanız, herkese açık bir IP adresine çözümlenen tam etki alanı adı (FQDN) gereklidir.',
    ],
    'notices' => [
        'allocations_added' => 'Tahsisler bu düğüme başarıyla eklendi.',
        'node_deleted' => 'Düğüm panelden başarıyla kaldırıldı.',
        'location_required' => 'Bu panele bir düğüm eklemeden önce en az bir konum yapılandırmanız gerekir.',
        'node_created' => 'Yeni düğüm başarıyla oluşturuldu. Bu makinede daemon\'u otomatik olarak yapılandırmak için \'Yapılandırma\' sekmesini ziyaret edebilirsiniz. <strong>Sunucu eklemeden önce en az bir IP adresi ve port tahsis etmelisiniz.</strong>',
        'node_updated' => 'Düğüm bilgileri güncellendi. Herhangi bir daemon ayarı değiştirildiyse, değişikliklerin etkili olması için yeniden başlatmanız gerekecek.',
        'unallocated_deleted' => '<code>:ip</code> için tahsis edilmemiş tüm portlar silindi.',
    ],
];
