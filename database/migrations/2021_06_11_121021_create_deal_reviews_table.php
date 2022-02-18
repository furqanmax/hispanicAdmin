<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_reviews', function (Blueprint $table) {
            $table->id();

            $table->integer('rating')->nullable()->default(null);
            $table->string('comment',1000)->nullable()->default(null);
            $table->bigInteger('deal_sales_id')->unsigned();




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
        Schema::dropIfExists('deal_reviews');
    }
}
