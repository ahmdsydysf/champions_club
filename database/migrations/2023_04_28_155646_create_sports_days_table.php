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
        Schema::create('sports_days', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sport_id')->nullable();
            $table->unsignedBigInteger('firstday_id')->nullable();
            $table->unsignedBigInteger('secondday_id')->nullable();
            $table->time('sport_time', $precision = 0)->nullable();
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
        Schema::dropIfExists('sports_days');
    }
};
