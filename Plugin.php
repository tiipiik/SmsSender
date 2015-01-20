<?php namespace Tiipiik\SmsSender;

use App;
use Backend;
use System\Classes\PluginBase;

/**
 * SmsSender Plugin Information File
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'tiipiik.smssender::lang.backend.info_name',
            'description' => 'tiipiik.smssender::lang.backend.info_description',
            'author'      => 'Tiipiik',
            'icon'        => 'icon-envelope-square'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Tiipiik\SmsSender\ReportWidgets\MessagesOverview'=>[
                'label'=>'SmsSender messages overview',
                'context'=>'dashboard'
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'smssender' => [
                'label' => 'tiipiik.smssender::lang.backend.info_label',
                'icon' => 'icon-envelope-square',
                'description' => 'tiipiik.smssender::lang.backend.info_description',
                'class' => 'Tiipiik\SmsSender\Models\Setting',
                'order' => 100
            ]
        ];
    }

}