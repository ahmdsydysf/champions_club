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
        Schema::create('membership_invoices', function (Blueprint $table) {
            $table->id();
            $table->date('invoice_date')->nullable();
            $table->double('order_total', 8, 2)->nullable();
            $table->double('vat_perc', 8, 2)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('invoice_status', [0,1])->default(0)->comment('0 >> cart ,1>>complete');
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
        Schema::dropIfExists('membership_invoices');
    }
};
