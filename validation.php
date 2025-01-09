<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları, doğrulayıcı sınıfı tarafından kullanılan varsayılan
    | hata mesajlarını içerir. Bu kuralların bazıları, boyut kuralları gibi
    | birden fazla sürüme sahiptir. Her bir mesajı burada değiştirebilirsiniz.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihinden sonra veya ona eşit bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşabilir.',
    'alpha_dash' => ':attribute sadece harfler, sayılar ve tireler içerebilir.',
    'alpha_num' => ':attribute sadece harfler ve sayılardan oluşabilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihinden önce veya ona eşit bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute, :min ve :max arasında olmalıdır.',
        'file' => ':attribute, :min ve :max kilobayt arasında olmalıdır.',
        'string' => ':attribute, :min ve :max karakter arasında olmalıdır.',
        'array' => ':attribute, :min ve :max öğe arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_format' => ':attribute, :format formatı ile eşleşmiyor.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute, :digits basamaktan oluşmalıdır.',
    'digits_between' => ':attribute, :min ve :max basamaktan oluşmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahiptir.',
    'distinct' => ':attribute alanı tekrar eden bir değere sahiptir.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı gereklidir.',
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı, :other içinde mevcut değil.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'max' => [
        'numeric' => ':attribute, :max\'tan büyük olamaz.',
        'file' => ':attribute, :max kilobayttan büyük olamaz.',
        'string' => ':attribute, :max karakterden büyük olamaz.',
        'array' => ':attribute, :max öğeden fazla olamaz.',
    ],
    'mimes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'mimetypes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğe içermelidir.',
    ],
    'not_in' => 'Seçilen :attribute geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':other :value olduğunda :attribute alanı gereklidir.',
    'required_unless' => ':other :values içinde olmadığı sürece :attribute alanı gereklidir.',
    'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_without' => ':values mevcut olmadığında :attribute alanı gereklidir.',
    'required_without_all' => ':values hiçbirisi mevcut olmadığında :attribute alanı gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size öğe içermelidir.',
    ],
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir zaman dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute formatı geçersiz.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları, yer tutucu yerine daha kullanıcı dostu bir şey
    | koymak için kullanılır, örneğin E-posta Adresi yerine "email". Bu, mesajları
    | biraz daha temiz hale getirmemize yardımcı olur.
    |
    */

    'attributes' => [],

    // Pterodactyl için iç doğrulama mantığı
    'internal' => [
        'variable_value' => ':env değişkeni',
        'invalid_password' => 'Sağlanan şifre bu hesap için geçersiz.',
    ],
];
