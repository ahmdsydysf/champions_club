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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->date('session_date')->nullable();
            $table->integer('session_no')->nullable();
            $table->unsignedBigInteger('membership_details_id')->nullable();
            $table->unsignedBigInteger('child_id')->nullable();
            $table->enum('attend', [0,1])->default(0)->comment('0 >> abcent ,1>>active');
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
        Schema::dropIfExists('attendances');
    }
};
