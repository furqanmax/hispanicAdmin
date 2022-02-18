<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersAdSubscriptionsTableForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_ad_subscriptions', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('ad_subscription_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ad_subscription_id')->references('id')->on('ad_subscriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_ad_subscriptions', function (Blueprint $table) {

            $table->dropForeign(['user_id']);
            $table->dropForeign(['ad_subscription_id']);
        });
    }
}
