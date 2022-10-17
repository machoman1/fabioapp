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
        Schema::create('currency_conversion_sellings', function (Blueprint $table) {
            $table->id();
            $table->string('dollars')->default('0.00');
            $table->string('bitcoin')->default('0.00');
            $table->string('etherom')->default('0.00');
            $table->string('litecoin')->default('0.00');
            $table->string('bitcoinCash')->default('0.00');
            $table->string('fee')->default('0.00');
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
        Schema::dropIfExists('currency_conversion_sellings');
    }
};
