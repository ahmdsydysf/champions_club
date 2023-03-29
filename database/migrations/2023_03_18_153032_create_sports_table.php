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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('sport_title_en')->nullable();
            $table->string('sport_title_ar')->nullable();
            $table->string('sport_subtitle_en')->nullable();
            $table->string('sport_subtitle_ar')->nullable();
            $table->string('sport_image')->default('default_sport.jpg');
            $table->text('sport_overview_en')->nullable();
            $table->text('sport_overview_ar')->nullable();
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
        Schema::dropIfExists('sports');
    }
};
