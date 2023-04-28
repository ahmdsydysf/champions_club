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
        Schema::create('user_childrens', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('personal_image')->nullable();
            $table->string('birth_image')->nullable();
            $table->double('height', 8, 2)->nullable();
            $table->double('width', 8, 2)->nullable();
            $table->integer('level')->default(1);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_relationship')->nullable();
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
        Schema::dropIfExists('user_childrens');
    }
};
