<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->string('message',1000)->nullable();

            $table->string('message_sp',1000)->nullable();
            $table->bigInteger('recipient_id')->unsigned();
            $table->bigInteger('sender_Id')->unsigned();

            $table->date('upload_date')->nullable();
            $table->string('status',50)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
