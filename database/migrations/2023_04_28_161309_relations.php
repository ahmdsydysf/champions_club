<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_childrens', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');

        });
        Schema::table('membership_invoices', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');

        });


        Schema::table('membership_details', function (Blueprint $table) {
            $table->foreign('invoice_id')->references('id')->on('membership_invoices');
            $table->foreign('child_id')->references('id')->on('user_childrens');
            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('sport_days_id')->references('id')->on('sports_days');

        });

        Schema::table('sports_days', function (Blueprint $table) {

            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('firstday_id')->references('id')->on('day_news');
            $table->foreign('secondday_id')->references('id')->on('day_news');

        });

        Schema::table('attendances', function (Blueprint $table) {

            $table->foreign('membership_details_id')->references('id')->on('membership_details');
            $table->foreign('child_id')->references('id')->on('user_childrens');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
