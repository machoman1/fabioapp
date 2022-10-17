<?php

namespace Database\Seeders;
use DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(buySellBitcoinSeeder::class);
        $this->call(buySellEtheromSeeder::class);
        $this->call(buySellLitecoinSeeder::class);
        $this->call(buySellBitcoinCashSeeder::class);
        $this->call(CurrencyConversionSeeder::class);
        $this->call(CurrencyConversionSellingSeeder::class);
        $this->call(PaymentDetailsSeeder::class);
        $this->call(SellingDetailsSeeder::class);


    }
}
