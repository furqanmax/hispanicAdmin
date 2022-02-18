<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->string('comment_en',1000)->nullable();
            $table->string('comment_sp',1000)->nullable();

            $table->integer('rating')->nullable();

            $table->date('date_time')->default(null);

            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('parent_comment_id')->unsigned()->nullable();

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
        Schema::dropIfExists('comments');
    }
}
