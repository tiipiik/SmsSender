<?php namespace Tiipiik\SmsSender\ReportWidgets;

use Exception;
use Backend\Classes\ReportWidgetBase;
use System\Classes\ApplicationException;
use Tiipiik\SmsSender\Classes\Sender;

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
                'title'             => 'Widget title',
                'default'           => 'Messages overview',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'The Widget Title is required.'
            ],
            'days' => [
                'title'             => 'Number of days to display data for',
                'default'           => '1',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'failed_only' => [
                'title'             => 'Display only failed messages',
                'type'              => 'checkbox',
                'default'           => '1',
            ]
        ];
    }
    
    protected function loadData()
    {
        $days = $this->property('days');
        $status = $this->property('failed_only');
        
        $mList = [];
        
        $messages = Sender::getMessages($days, $status);
        
        foreach ($messages as $message)
        {
            $mList[] = [
                'from'=>$message->from,
                'to'=>$message->to,
                'message'=>$message->message,
                'status'=>$message->status,
            ];
        }
        $this->vars['rows'] = $mList;
    }
}