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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_en')->nullable();
            $table->string('branch_ar')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_ar')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->text('google_map')->nullable();
            $table->tinyInteger('master_branch')->comment("1 , 0")->default(1);
            $table->string('working_hours_en')->nullable();
            $table->string('working_hours_ar')->nullable();
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
        Schema::dropIfExists('branches');
    }
};
