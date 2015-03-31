<?php
return [
    'backend'=> [
        'from_label'=>'С номера',
        'from_ph'=>'Международный номер для отпраки SMS',
        'from_comment'=>'Специальный номер "от кого" поля в SMS-сообщении',
        
        'gateways_label'=>'Шлюз',
        'gateways_comment'=>'Выбор шлюза для отправки',
        'gateways_ph'=>'-- Выберите нужный --',
        'clickatell_tab'=>'Сервис Clickatell',
        
        'clickatell_username'=>'Имя пользователя',
        'clickatell_username_ph'=>'Ваше имя в системе Clickatell',
        'clickatell_username_comment'=>'Имя используется в аккаунте Clickatell',
        
        'clickatell_passwd'=>'Пароль',
        'clickatell_passwd_ph'=>'Пароль в системе Clickatell',
        'clickatell_passwd_comment'=>'Ваш пароль в Clickatell',
        
        'clickatell_api_id'=>'API ID',
        'clickatell_api_id_ph'=>'Ваш идентификатор API Clickatell',
        'clickatell_api_id_comment'=>'Идентификатор API Clickatel (предоставляется сервисом)',
        
        'clickatell_api_url'=>'API URL',
        'clickatell_api_url_ph'=>'Адрес API URL',
        'clickatell_api_url_comment'=>'Изменяте этот параметр только если абсолютно уверены в действиях',
    ]
];
