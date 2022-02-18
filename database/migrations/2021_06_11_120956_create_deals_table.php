<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('details',1000)->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();

            $table->bigInteger('seller')->unsigned();
            $table->decimal('price',10,2);
            $table->decimal('discount',10,2);
            $table->string('url',200)->nullable()->default(null);
            $table->string('status',50)->nullable()->default(null);
            $table->bigInteger('media_id')->unsigned();






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
        Schema::dropIfExists('deals');
    }
}
