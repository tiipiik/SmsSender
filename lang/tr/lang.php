<?php

return [
    'backend'=> [
        'from_label'=>'Gönderici Numarası',
        'from_ph'=>'SMS göndermek için uluslararası numaralar kullanılabilir',
        'from_comment'=>'Mesajın gönderici kısmında görünecek uluslararası numarayı belirtin.',
        
        'gateways_label'=>'Operatörler',
        'gateways_comment'=>'Çalışmak istediğiniz operatörü seçin',
        'gateways_ph'=>'-- Operatörü Seçin --',
        'clickatell_tab'=>'Clickatell',
        'twilio_tab'=>'Twilio',
        
        'clickatell_username'=>'Kullanıcı Adı',
        'clickatell_username_ph'=>'Kullanıcı adınız',
        'clickatell_username_comment'=>'Clickatell hesabınız için kullandığınız kullanıcı adınız',
        
        'clickatell_passwd'=>'Şifre',
        'clickatell_passwd_ph'=>'Şifreniz',
        'clickatell_passwd_comment'=>'Clickatell hesabınız için kullandığını şifreniz',
        
        'clickatell_api_id'=>'API ID',
        'clickatell_api_id_ph'=>'Api ID niz',
        'clickatell_api_id_comment'=>'API ID Clickatell tarafından sağlanır',
        
        'clickatell_api_url'=>'API URL',
        'clickatell_api_url_ph'=>'Api URL',
        'clickatell_api_url_comment'=>'Yalnızca ne yaptığınızı biliyorsanız bu URL\'i değiştirin',
        
        'twilio_account_id'=>'AccountSid',
        'twilio_account_id_ph'=>'Twilio Hesap AccountSid',
        'twilio_account_id_comment'=>'AccountSid Twilio tarafından verilmektedir (www.twilio.com/user/account)',
        
        'twilio_token'=>'AuthToken',
        'twilio_token_ph'=>'Twilio Hesap AuthToken',
        'twilio_token_comment'=>'AuthToken Twilio tarafından verilmektedir (www.twilio.com/user/account)',

        'info_name' => 'Sms Gönder',
        'info_description' => 'Kullanıcılarınıza farklı operatörleri kullanalarak SMS gönderebilirsiniz.',
        'info_label' => 'SMS Gönder'
    ],

    'posts' => [
        'new' => 'Yeni Sms Gönderici',
        'create' => 'Sms Gönderici Oluştur',
        'edit' => 'Sms Göndericiyi Düzenle',
        'preview' => 'Sms Göndericiyi Önizle',
        'manage' => 'Sms Göndericileri Düzenle'
    ],

    'create' => [
        'creating' => 'Sms Gönderici Oluşturuluyor...',
        'create' => 'Oluştur',
        'createnclose' => 'Oluştur ve Kapat',
        'cancel' => 'İptal',
        'or' => 'veya',
        'return' => 'SMS listesine geri dön'
    ],

    'update' => [
        'saving' => 'Sms Gönderici Kaydediliyor...',
        'save' => 'Kaydet',
        'savenclose' => 'Kaydet ve Kapat',
        'cancel' => 'İptal',
        'or' => 'veya',
        'return' => 'SMS listesine geri dön',
        'deleting' => 'Sms Gönderici Siliniyor...',
        'delete_sure' => 'Sms göndericiyi silmek istediğinize emin misiniz?'
    ],

    'model' => [
        'id' => 'No.',
    ],

    'widget' => [
        'title' => 'Eklenti başlığı',
        'defaultstr' => 'Mesajlara genel bakış',
        'validation' => 'Eklenti Başlığı gereklidir.',
        'days_title' => 'Kaç günlük veri gösterilsin?',
        'rows_title' => 'Kaç satır gösterilsin?',
        'failed_title' => 'Sadece gönderilemeyenler?',
        'nosend' => 'Şuan gönderilmiş mesaj yok',
        'from' => 'Kimden',
        'to' => 'Kime',
        'message' => 'Mesaj',
        'status' => 'Durum',
        'gateway_fail' => 'Operatör Ağ Geçidi kimlik doğrulama hatası',
        'sent' => 'Gönderildi',
        'failed' => 'Gönderilemedi'
    ]
];
