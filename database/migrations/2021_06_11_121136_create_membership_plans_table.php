<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_sp')->nullable();


            $table->text('description_en')->nullable();
            $table->text('description_sp')->nullable();


            $table->integer('credits')->nullable();
            $table->decimal('monthly_price',10,2);
            $table->decimal('yearly_price',10,2);


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
        Schema::dropIfExists('membership_plans');
    }
}
