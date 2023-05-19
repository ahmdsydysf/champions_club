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
        Schema::create('news_events', function (Blueprint $table) {
            $table->id();
            $table->longText('title_en')->nullable();
            $table->longText('title_ar')->nullable();
            $table->date('date')->nullable();
            $table->longText('brief_en')->nullable();
            $table->longText('brief_ar')->nullable();
            $table->longText('image')->default('default_event.jpg');
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
        Schema::dropIfExists('news_events');
    }
};
