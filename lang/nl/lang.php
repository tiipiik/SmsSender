<?php

return [
    'backend'=> [
        'from_label'=>'Van nummer',
        'from_ph'=>'Internationale nummer dat gebruikt wordt om de SMS te versturen',
        'from_comment'=>'Geef het internationale nummer voor het "van" veld van het bericht',
        
        'gateways_label'=>'Gateways',
        'gateways_comment'=>'Selecteer de gateway die jij gebruikt',
        'gateways_ph'=>'-- Selecteer jou gateway --',
        'clickatell_tab'=>'Clickatell',
        'twilio_tab'=>'Twilio',
        
        'clickatell_username'=>'Gebruikersnaam',
        'clickatell_username_ph'=>'Jou Clickatell gebruikersnaam',
        'clickatell_username_comment'=>'De gebruikersnaam van jou Clickatell account',
        
        'clickatell_passwd'=>'Wachtwoord',
        'clickatell_passwd_ph'=>'Jou Clickatell wachtwoord',
        'clickatell_passwd_comment'=>'Het wachtwoord dat jij gebruikt voor jou Clickatell account',
        
        'clickatell_api_id'=>'API ID',
        'clickatell_api_id_ph'=>'Jou Clickatell Api Id',
        'clickatell_api_id_comment'=>'De API Id van jou Clickatell account',
        
        'clickatell_api_url'=>'API URL',
        'clickatell_api_url_ph'=>'Jou Clickatell Api URL',
        'clickatell_api_url_comment'=>'Verander deze URL enkel als je weet wat je doet',
        
        'twilio_account_id'=>'AccountSid',
        'twilio_account_id_ph'=>'Jou Twilio AccountSid',
        'twilio_account_id_comment'=>'De AccountSid van jou Twilio account (www.twilio.com/user/account)',
        
        'twilio_token'=>'AuthToken',
        'twilio_token_ph'=>'Jou Twilio AuthToken',
        'twilio_token_comment'=>'De AuthToken van jou Twilio account (www.twilio.com/user/account)',
    ]
];