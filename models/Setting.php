<?php namespace Tiipiik\SmsSender\Models;

use Model;

/**
 * Setting Model
 */
class Setting extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'tiipiik_smssender_settings';

    public $settingsFields = 'fields.yaml';
        
    public $rules = [
        'from' => 'required',
        'gateway' => 'required|in:clickatell,test',
        'clickatell_user_name' => 'required',
        'clickatell_passwd' => 'required',
        'clickatell_api_id' => 'required',
        'clickatell_base_url' => 'required',
    ];
}