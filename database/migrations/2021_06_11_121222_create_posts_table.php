<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('topic_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->timestamp('upload_date')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_sp')->nullable();

            $table->string('slug')->nullable();




            $table->string('details_en',1000)->nullable();
            $table->string('details_sp',1000)->nullable();


            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->string('status',50)->nullable()->default(null);


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
        Schema::dropIfExists('posts');
    }
}
