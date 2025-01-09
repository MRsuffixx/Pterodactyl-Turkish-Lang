<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Bu sunucunun varsayılan tahsisini silmeye çalışıyorsunuz, ancak kullanılacak bir yedek tahsis bulunmamaktadır.',
        'marked_as_failed' => 'Bu sunucu, önceki bir kurulumun başarısız olduğu olarak işaretlendi. Mevcut durum bu durumda değiştirilemez.',
        'bad_variable' => ':name değişkeni ile ilgili bir doğrulama hatası oluştu.',
        'daemon_exception' => 'Daemon ile iletişim kurulmaya çalışılırken bir istisna oluştu ve HTTP/:code yanıt kodu döndürüldü. Bu istisna kaydedildi. (istek kimliği: :request_id)',
        'default_allocation_not_found' => 'İstenen varsayılan tahsis, bu sunucunun tahsisleri arasında bulunamadı.',
    ],
    'alerts' => [
        'startup_changed' => 'Bu sunucunun başlangıç yapılandırması güncellendi. Eğer bu sunucunun yuvası veya yumurtası değiştirildiyse, şimdi bir yeniden kurulum gerçekleşecektir.',
        'server_deleted' => 'Sunucu sistemden başarıyla silindi.',
        'server_created' => 'Sunucu panelde başarıyla oluşturuldu. Bu sunucunun tamamen kurulması için daemon\'a birkaç dakika verin.',
        'build_updated' => 'Bu sunucunun yapı detayları güncellendi. Bazı değişikliklerin etkili olması için yeniden başlatma gerekebilir.',
        'suspension_toggled' => 'Sunucu askıya alma durumu :status olarak değiştirildi.',
        'rebuild_on_boot' => 'Bu sunucu, Docker Container\'ın yeniden oluşturulmasını gerektiriyor olarak işaretlendi. Bu, sunucu bir sonraki başlatıldığında gerçekleşecektir.',
        'install_toggled' => 'Bu sunucunun kurulum durumu değiştirildi.',
        'server_reinstalled' => 'Bu sunucu, şu anda başlayacak şekilde yeniden kurulum kuyruğuna alındı.',
        'details_updated' => 'Sunucu detayları başarıyla güncellendi.',
        'docker_image_updated' => 'Bu sunucu için kullanılan varsayılan Docker görüntüsü başarıyla değiştirildi. Bu değişikliğin uygulanması için bir yeniden başlatma gereklidir.',
        'node_required' => 'Bu panele bir sunucu eklemeden önce en az bir düğüm yapılandırmanız gerekir.',
        'transfer_nodes_required' => 'Sunucuları transfer etmek için en az iki düğüm yapılandırmanız gerekir.',
        'transfer_started' => 'Sunucu transferi başlatıldı.',
        'transfer_not_viable' => 'Seçtiğiniz düğüm, bu sunucuyu barındırmak için gerekli disk alanına veya belleğe sahip değil.',
    ],
];
