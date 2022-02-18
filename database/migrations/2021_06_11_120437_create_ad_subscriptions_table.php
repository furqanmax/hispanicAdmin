<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_subscriptions', function (Blueprint $table) {
            $table->id();

            $table->string('title_en')->nullable();
            $table->string('title_sp')->nullable();

            $table->text('description_en')->nullable();
            $table->text('description_sp')->nullable();

            $table->bigInteger('credits')->nullable();
            $table->double('monthly_price',10,2)->nullable();
            $table->double('yearly_price',10,2)->nullable();



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
        Schema::dropIfExists('ad_subscriptions');
    }
}
