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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('about_master_en')->nullable();
            $table->string('about_master_ar')->nullable();
            $table->string('about_details_en')->nullable();
            $table->string('about_details_ar')->nullable();
            $table->string('about_video')->nullable();
            $table->string('sports_title_en')->nullable();
            $table->string('sports_title_ar')->nullable();
            $table->text('sports_text_en')->nullable();
            $table->text('sports_text_ar')->nullable();
            $table->string('services_text_en')->nullable();
            $table->string('services_text_ar')->nullable();
            $table->string('services_title_en')->nullable();
            $table->string('services_title_ar')->nullable();
            $table->string('membership_text_en')->nullable();
            $table->string('membership_text_ar')->nullable();
            $table->string('membership_title_en')->nullable();
            $table->string('membership_title_ar')->nullable(); 
            $table->string('news_text_en')->nullable();
            $table->string('news_text_ar')->nullable();
            $table->string('news_title_en')->nullable();
            $table->string('news_title_ar')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
