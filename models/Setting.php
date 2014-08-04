<?php namespace Tiipiik\SmsSender\Models;

use Model;

/**
 * Setting Model
 */
class Setting extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'tiipiik_smssender_settings';

    public $settingsFields = 'fields.yaml';
    
    public $rules = [
        'from' => 'required',
        'clickatell_user_name' => 'required',
        'clickatell_passwd' => 'required',
        'clickatell_api_id' => 'required',
        'clickatell_base_url' => 'required',
    ];
}