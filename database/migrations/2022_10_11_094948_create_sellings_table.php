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
        Schema::create('sellings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('amount_selling')->nullable();
            $table->string('amount_to_pay')->nullable();
            $table->string('crypto_type')->nullable();
            $table->string('crypto_address')->nullable();
            $table->string('total_amount_to_pay')->nullable();
            $table->string('momo_account_name')->nullable();
            $table->string('momo_account_number')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('sellings');
    }
};
