<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessagesTableForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->index('recipient_id');
            $table->index('sender_Id');
            $table->foreign('recipient_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('sender_Id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {

            $table->dropForeign(['recipient_id']);
            $table->dropForeign(['sender_Id']);
        });
    }
}
