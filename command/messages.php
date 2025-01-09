<?php

return [
    'location' => [
        'no_location_found' => 'Sağlanan kısa kodla eşleşen bir kayıt bulunamadı.',
        'ask_short' => 'Konum Kısa Kodu',
        'ask_long' => 'Konum Açıklaması',
        'created' => 'Yeni bir konum başarıyla oluşturuldu (:name) ve kimliği :id olarak ayarlandı.',
        'deleted' => 'İstenen konum başarıyla silindi.',
    ],
    'user' => [
        'search_users' => 'Bir Kullanıcı Adı, Kullanıcı ID\'si veya E-posta Adresi girin',
        'select_search_user' => 'Silinecek kullanıcının kimliği (Tekrar arama yapmak için \'0\' girin)',
        'deleted' => 'Kullanıcı Panelden başarıyla silindi.',
        'confirm_delete' => 'Bu kullanıcıyı Panelden silmek istediğinizden emin misiniz?',
        'no_users_found' => 'Girilen arama terimi için kullanıcı bulunamadı.',
        'multiple_found' => 'Girilen kullanıcı için birden fazla hesap bulundu, --no-interaction bayrağı nedeniyle kullanıcı silinemedi.',
        'ask_admin' => 'Bu kullanıcı bir yönetici mi?',
        'ask_email' => 'E-posta Adresi',
        'ask_username' => 'Kullanıcı Adı',
        'ask_name_first' => 'Ad',
        'ask_name_last' => 'Soyad',
        'ask_password' => 'Parola',
        'ask_password_tip' => 'Rastgele bir parola ile kullanıcıya e-posta göndermek isterseniz, bu komutu yeniden çalıştırın (CTRL+C) ve `--no-password` bayrağını ekleyin.',
        'ask_password_help' => 'Parolalar en az 8 karakter uzunluğunda olmalı ve en az bir büyük harf ve rakam içermelidir.',
        '2fa_help_text' => [
            'Bu komut, bir kullanıcının hesabı için etkinleştirilmişse iki faktörlü kimlik doğrulamayı devre dışı bırakır. Bu yalnızca kullanıcının hesabına erişimi kaybetmesi durumunda bir hesap kurtarma komutu olarak kullanılmalıdır.',
            'Eğer yapmak istediğiniz bu değilse, bu işlemi iptal etmek için CTRL+C tuşlarına basın.',
        ],
        '2fa_disabled' => 'İki faktörlü kimlik doğrulama :email için devre dışı bırakıldı.',
    ],
    'schedule' => [
        'output_line' => '`:schedule` (:hash) için ilk görevi başlatıyor.',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Hizmet yedekleme dosyası siliniyor: :file.',
    ],
    'server' => [
        'rebuild_failed' => '":name" (#:id) için yeniden oluşturma isteği ":node" düğümünde hata verdi: :message',
        'reinstall' => [
            'failed' => '":name" (#:id) için yeniden kurulum isteği ":node" düğümünde hata verdi: :message',
            'confirm' => 'Bir grup sunucuya yeniden kurulum yapmak üzeresiniz. Devam etmek istiyor musunuz?',
        ],
        'power' => [
            'confirm' => ':count sunucuda bir :action işlemi yapmak üzeresiniz. Devam etmek istiyor musunuz?',
            'action_failed' => '":name" (#:id) için güç işlemi isteği ":node" düğümünde hata verdi: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (ör. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Kullanıcı Adı',
            'ask_smtp_password' => 'SMTP Parolası',
            'ask_mailgun_domain' => 'Mailgun Alan Adı',
            'ask_mailgun_endpoint' => 'Mailgun Uç Noktası',
            'ask_mailgun_secret' => 'Mailgun Gizli Anahtarı',
            'ask_mandrill_secret' => 'Mandrill Gizli Anahtarı',
            'ask_postmark_username' => 'Postmark API Anahtarı',
            'ask_driver' => 'E-postalar için hangi sürücü kullanılacak?',
            'ask_mail_from' => 'E-postaların gönderileceği adres',
            'ask_mail_name' => 'E-postaların gönderici adı olarak görüneceği ad',
            'ask_encryption' => 'Kullanılacak şifreleme yöntemi',
        ],
    ],
];
