<?php

/**
 * Farklı etkinlik günlüğü olayları için tüm çeviri dizelerini içerir.
 * Bunlar, olay adındaki iki noktanın (:) önündeki değere göre anahtarlanmalıdır.
 * İki nokta yoksa, üst düzeyde bulunmalıdır.
 */
return [
    'auth' => [
        'fail' => 'Başarısız giriş denemesi',
        'success' => 'Giriş yapıldı',
        'password-reset' => 'Şifre sıfırlandı',
        'reset-password' => 'Şifre sıfırlama talebi',
        'checkpoint' => 'İki faktörlü kimlik doğrulama talep edildi',
        'recovery-token' => 'İki faktörlü kurtarma tokeni kullanıldı',
        'token' => 'İki faktörlü doğrulama çözüldü',
        'ip-blocked' => ':identifier için listelenmeyen bir IP adresinden gelen talep engellendi',
        'sftp' => [
            'fail' => 'Başarısız SFTP giriş denemesi',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-posta :old adresinden :new adresine değiştirildi',
            'password-changed' => 'Şifre değiştirildi',
        ],
        'api-key' => [
            'create' => 'Yeni API anahtarı :identifier oluşturuldu',
            'delete' => 'API anahtarı :identifier silindi',
        ],
        'ssh-key' => [
            'create' => 'SSH anahtarı :fingerprint hesaba eklendi',
            'delete' => 'SSH anahtarı :fingerprint hesaptan kaldırıldı',
        ],
        'two-factor' => [
            'create' => 'İki faktörlü kimlik doğrulama etkinleştirildi',
            'delete' => 'İki faktörlü kimlik doğrulama devre dışı bırakıldı',
        ],
    ],
    'server' => [
        'reinstall' => 'Sunucu yeniden yüklendi',
        'console' => [
            'command' => 'Sunucuda ":command" komutu çalıştırıldı',
        ],
        'power' => [
            'start' => 'Sunucu başlatıldı',
            'stop' => 'Sunucu durduruldu',
            'restart' => 'Sunucu yeniden başlatıldı',
            'kill' => 'Sunucu işlemi sonlandırıldı',
        ],
        'backup' => [
            'download' => ':name yedeklemesi indirildi',
            'delete' => ':name yedeklemesi silindi',
            'restore' => ':name yedeklemesi geri yüklendi (silinen dosyalar: :truncate)',
            'restore-complete' => ':name yedeklemesinin geri yüklemesi tamamlandı',
            'restore-failed' => ':name yedeklemesinin geri yüklemesi başarısız oldu',
            'start' => 'Yeni bir yedekleme :name başlatıldı',
            'complete' => ':name yedeklemesi tamamlandı olarak işaretlendi',
            'fail' => ':name yedeklemesi başarısız olarak işaretlendi',
            'lock' => ':name yedeklemesi kilitlendi',
            'unlock' => ':name yedeklemesi kilidi açıldı',
        ],
        'database' => [
            'create' => 'Yeni veritabanı :name oluşturuldu',
            'rotate-password' => ':name veritabanı şifresi değiştirildi',
            'delete' => ':name veritabanı silindi',
        ],
        'file' => [
            'compress_one' => ':directory:file sıkıştırıldı',
            'compress_other' => ':directory içinde :count dosya sıkıştırıldı',
            'read' => ':file içeriği görüntülendi',
            'copy' => ':file kopyası oluşturuldu',
            'create-directory' => ':directory:name dizini oluşturuldu',
            'decompress' => ':directory içindeki :files sıkıştırması açıldı',
            'delete_one' => ':directory:files.0 silindi',
            'delete_other' => ':directory içinde :count dosya silindi',
            'download' => ':file indirildi',
            'pull' => ':url adresinden :directory konumuna bir uzak dosya indirildi',
            'rename_one' => ':directory:files.0.from adı :directory:files.0.to olarak değiştirildi',
            'rename_other' => ':directory içinde :count dosyanın adı değiştirildi',
            'write' => ':file dosyasına yeni içerik yazıldı',
            'upload' => 'Dosya yükleme başlatıldı',
            'uploaded' => ':directory:file yüklendi',
        ],
        'sftp' => [
            'denied' => 'İzinler nedeniyle SFTP erişimi engellendi',
            'create_one' => ':files.0 oluşturuldu',
            'create_other' => ':count yeni dosya oluşturuldu',
            'write_one' => ':files.0 içeriği değiştirildi',
            'write_other' => ':count dosyanın içeriği değiştirildi',
            'delete_one' => ':files.0 silindi',
            'delete_other' => ':count dosya silindi',
            'create-directory_one' => ':files.0 dizini oluşturuldu',
            'create-directory_other' => ':count dizin oluşturuldu',
            'rename_one' => ':files.0.from adı :files.0.to olarak değiştirildi',
            'rename_other' => ':count dosya yeniden adlandırıldı veya taşındı',
        ],
        'allocation' => [
            'create' => ':allocation sunucuya eklendi',
            'notes' => ':allocation için notlar ":old" değerinden ":new" değerine güncellendi',
            'primary' => ':allocation, birincil sunucu tahsisi olarak ayarlandı',
            'delete' => ':allocation tahsisi silindi',
        ],
        'schedule' => [
            'create' => ':name zamanlaması oluşturuldu',
            'update' => ':name zamanlaması güncellendi',
            'execute' => ':name zamanlaması elle çalıştırıldı',
            'delete' => ':name zamanlaması silindi',
        ],
        'task' => [
            'create' => ':name zamanlaması için yeni bir ":action" görevi oluşturuldu',
            'update' => ':name zamanlaması için ":action" görevi güncellendi',
            'delete' => ':name zamanlaması için bir görev silindi',
        ],
        'settings' => [
            'rename' => 'Sunucu adı :old değerinden :new değerine değiştirildi',
            'description' => 'Sunucu açıklaması :old değerinden :new değerine değiştirildi',
        ],
        'startup' => [
            'edit' => ':variable değişkeni ":old" değerinden ":new" değerine değiştirildi',
            'image' => 'Sunucu için Docker Görüntüsü :old değerinden :new değerine güncellendi',
        ],
        'subuser' => [
            'create' => ':email alt kullanıcısı olarak eklendi',
            'update' => ':email alt kullanıcısının izinleri güncellendi',
            'delete' => ':email alt kullanıcısı olarak kaldırıldı',
        ],
    ],
];
