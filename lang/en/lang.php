<?php

return [
    'backend'=> [
        'from_label'=>'From number',
        'from_ph'=>'International number used to send SMS',
        'from_comment'=>'Specify the international number for the "from" field of the message',
        
        'gateways_label'=>'Gateways',
        'gateways_comment'=>'Select the gateway your using',
        'gateways_ph'=>'-- Select your gateway --',
        'clickatell_tab'=>'Clickatell',
        'twilio_tab'=>'Twilio',
        
        'clickatell_username'=>'Username',
        'clickatell_username_ph'=>'Your Clickatell username',
        'clickatell_username_comment'=>'The username you use for your Clickatell account',
        
        'clickatell_passwd'=>'Password',
        'clickatell_passwd_ph'=>'Your Clickatell password',
        'clickatell_passwd_comment'=>'The password you use for your Clickatell account',
        
        'clickatell_api_id'=>'API ID',
        'clickatell_api_id_ph'=>'Your Clickatell Api Id',
        'clickatell_api_id_comment'=>'API Id provided by Clickatell',
        
        'clickatell_api_url'=>'API URL',
        'clickatell_api_url_ph'=>'Your Clickatell Api URL',
        'clickatell_api_url_comment'=>'Modify this URL only if you know what you\'re doing',
        
        'twilio_account_id'=>'AccountSid',
        'twilio_account_id_ph'=>'Your Twilio AccountSid',
        'twilio_account_id_comment'=>'AccountSid provided by Twilio (www.twilio.com/user/account)',
        
        'twilio_token'=>'AuthToken',
        'twilio_token_ph'=>'Your Twilio AuthToken',
        'twilio_token_comment'=>'AuthToken provided by Twilio (www.twilio.com/user/account)',
    ]
];