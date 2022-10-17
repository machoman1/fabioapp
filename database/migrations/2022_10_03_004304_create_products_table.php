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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_logo')->nullable();
            $table->string('name')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('chart')->nullable();
            $table->string('price')->nullable();
            $table->string('change_arrow')->nullable();
            $table->string('change_value')->nullable();
            $table->string('status')->defailt('active');
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
        Schema::dropIfExists('products');
    }
};
