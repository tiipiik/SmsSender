<?php

return [
    'backend'=> [
        'from_label'=>'Numéro d\'envoi',
        'from_ph'=>'Le numéro international pour les envois',
        'from_comment'=>'Indiquez le numéro international utilisé pour envoyer les SMS',
        
        'gateways_label'=>'Passerelles',
        'gateways_comment'=>'Sélectionnez la passerelle que vous utilisez',
        'gateways_ph'=>'-- Sélectionnez votre passerelle --',
        'clickatell_tab'=>'Clickatell',
        
        'clickatell_username'=>'Nom d\'utilisateur',
        'clickatell_username_ph'=>'Votre nom d\'utilisateur Clickatell',
        'clickatell_username_comment'=>'Le nom d\'utilisateur de votre compte Clickatell',
        
        'clickatell_passwd'=>'Mot de passe',
        'clickatell_passwd_ph'=>'Votre mot de passe Clickatell',
        'clickatell_passwd_comment'=>'Le mot de passe de votre compte Clickatell',
        
        'clickatell_api_id'=>'Identifiant API',
        'clickatell_api_id_ph'=>'L\'identifiant de l\'API Clickatell que vous utilisez',
        'clickatell_api_id_comment'=>'API Id provided by Clickatell',
        
        'clickatell_api_url'=>'Url API',
        'clickatell_api_url_ph'=>'L\'url de l\'API Clickatell que vous utilisez',
        'clickatell_api_url_comment'=>'Ne modifiez cette url que si vous savez ce que vous faites',
        
        'twilio_account_id'=>'AccountSid',
        'twilio_account_id_ph'=>'Votre Twilio AccountSid',
        'twilio_account_id_comment'=>'AccountSid donné par Twilio (www.twilio.com/user/account)',
        
        'twilio_token'=>'AuthToken',
        'twilio_token_ph'=>'Your Twilio AuthToken',
        'twilio_token_comment'=>'AuthToken donné par Twilio (www.twilio.com/user/account)',
    ]
];