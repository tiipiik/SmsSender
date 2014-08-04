<?php namespace Tiipiik\SmsSender\Models;

use Model;

/**
 * MessageHistory Model
 */
class MessageHistory extends Model
{
    public $table = 'tiipiik_smssender_message_histories';
    protected $guarded = ['*'];
    
    public static function saveHistory($messageDatas = array())
    {
        echo '<pre>';
            var_dump($messageDatas);

        $message = new MessageHistory();
        $message->from = $messageDatas['from'];
        $message->to = $messageDatas['to'];
        $message->message = $messageDatas['message'];
        $message->status = $messageDatas['status'];
        $message->sess_id = $messageDatas['sess_id'];
        $message->save();
    }
}