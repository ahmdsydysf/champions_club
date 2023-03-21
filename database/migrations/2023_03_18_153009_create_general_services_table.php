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
        Schema::create('general_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_en')->nullable();
            $table->string('service_ar')->nullable();
            $table->string('overview_en')->nullable();
            $table->string('overview_ar')->nullable();
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
        Schema::dropIfExists('general_services');
    }
};
