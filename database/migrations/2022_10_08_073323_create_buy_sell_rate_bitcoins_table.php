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
        Schema::create('buy_sell_rate_bitcoins', function (Blueprint $table) {
            $table->id();
            $table->string('product_logo')->nullable();
            $table->string('name')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('buying')->nullable();
            $table->string('selling')->nullable();
            $table->string('status')->default('inactive');
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
        Schema::dropIfExists('buy_sell_rate_bitcoins');
    }
};
