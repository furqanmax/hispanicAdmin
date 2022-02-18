<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersMembershipTableSubscriptionsTableForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_membership_plans', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('user_membership_subscription_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_membership_subscription_id')->references('id')->on('membership_plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_membership_plans', function (Blueprint $table) {

            $table->dropForeign(['user_id']);
            $table->dropForeign(['user_membership_subscription_id']);
        });
    }
}
