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
            $table->longText('about_master_en')->nullable();
            $table->longText('about_master_ar')->nullable();
            $table->longText('about_details_en')->nullable();
            $table->longText('about_details_ar')->nullable();
            $table->longText('about_video')->nullable();
            $table->longText('sports_title_en')->nullable();
            $table->longText('sports_title_ar')->nullable();
            $table->longText('sports_text_en')->nullable();
            $table->longText('sports_text_ar')->nullable();
            $table->longText('services_text_en')->nullable();
            $table->longText('services_text_ar')->nullable();
            $table->longText('services_title_en')->nullable();
            $table->longText('services_title_ar')->nullable();
            $table->longText('membership_text_en')->nullable();
            $table->longText('membership_text_ar')->nullable();
            $table->longText('membership_title_en')->nullable();
            $table->longText('membership_title_ar')->nullable();
            $table->longText('news_text_en')->nullable();
            $table->longText('news_text_ar')->nullable();
            $table->longText('news_title_en')->nullable();
            $table->longText('news_title_ar')->nullable();
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
