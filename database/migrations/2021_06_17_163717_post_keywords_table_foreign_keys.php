<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostKeywordsTableForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_key_words', function (Blueprint $table) {
            $table->index('post_id');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidpost_key_words
     */
    public function down()
    {
        Schema::table('post_key_words', function (Blueprint $table) {

            $table->dropForeign(['post_id']);
        });
    }
}
