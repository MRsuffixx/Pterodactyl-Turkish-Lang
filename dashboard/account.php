<?php

return [
    'email' => [
        'title' => 'E-postanızı güncelleyin',
        'updated' => 'E-posta adresiniz güncellendi.',
    ],
    'password' => [
        'title' => 'Şifrenizi değiştirin',
        'requirements' => 'Yeni şifreniz en az 8 karakter uzunluğunda olmalıdır.',
        'updated' => 'Şifreniz güncellendi.',
    ],
    'two_factor' => [
        'button' => 'İki Faktörlü Kimlik Doğrulamayı Yapılandır',
        'disabled' => 'Hesabınızda iki faktörlü kimlik doğrulama devre dışı bırakıldı. Artık giriş yaparken bir token girmeniz gerekmeyecek.',
        'enabled' => 'Hesabınızda iki faktörlü kimlik doğrulama etkinleştirildi! Bundan sonra giriş yaparken, cihazınız tarafından oluşturulan kodu girmeniz gerekecek.',
        'invalid' => 'Sağlanan token geçersiz.',
        'setup' => [
            'title' => 'İki faktörlü kimlik doğrulamayı yapılandırın',
            'help' => 'Kodu tarayamıyor musunuz? Aşağıdaki kodu uygulamanıza girin:',
            'field' => 'Token girin',
        ],
        'disable' => [
            'title' => 'İki faktörlü kimlik doğrulamayı devre dışı bırakın',
            'field' => 'Token girin',
        ],
    ],
];
