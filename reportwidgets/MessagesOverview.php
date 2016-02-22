<?php namespace Tiipiik\SmsSender\ReportWidgets;

use Exception;
use Backend\Classes\ReportWidgetBase;
use System\Classes\ApplicationException;
use Tiipiik\SmsSender\Classes\Sender as SmsSender;
use Lang;

/**
 * SmsSender messages overview widget.
 *
 */
class MessagesOverview extends ReportWidgetBase
{
    /**
     * Renders the widget.
     */
    public function render()
    {   
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'tiipiik.smssender::lang.widget.title',
                'default'           => Lang::get('tiipiik.smssender::lang.widget.defaultstr'),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'tiipiik.smssender::lang.widget.validation'
            ],
            'days' => [
                'title'             => 'tiipiik.smssender::lang.widget.days_title',
                'default'           => '1',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'rows' => [
                'title'             => 'tiipiik.smssender::lang.widget.rows_title',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'failed_only' => [
                'title'             => 'tiipiik.smssender::lang.widget.failed_title',
                'type'              => 'checkbox',
                'default'           => '1',
            ]
        ];
    }
    
    protected function loadData()
    {
        $days = $this->property('days');
        $rows = $this->property('rows');
        $status = $this->property('failed_only');
        
        $mList = [];
        
        $messages = SmsSender::getMessages($days, $rows, $status);
        
        foreach ($messages as $message)
        {
            $mList[] = [
                'from'=>$message->from,
                'to'=>$message->to,
                'message'=>$message->message,
                'short_status'=>$message->short_status,
            ];
        }
        $this->vars['rows'] = $mList;
    }
}