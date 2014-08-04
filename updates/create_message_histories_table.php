<?php namespace Tiipiik\SmsSender\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMessageHistoriesTable extends Migration
{

    public function up()
    {
        Schema::create('tiipiik_smssender_message_histories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->integer('short_status')->default(0);
            $table->string('sess_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tiipiik_smssender_message_histories');
    }

}
