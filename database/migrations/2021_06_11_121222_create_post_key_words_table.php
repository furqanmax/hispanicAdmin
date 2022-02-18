<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostKeyWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_key_words', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();

            $table->string('title_en')->nullable();
            $table->string('title_sp')->nullable();
            $table->string('slug')->nullable();

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
        Schema::dropIfExists('post_key_words');
    }
}
