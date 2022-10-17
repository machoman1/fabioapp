<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class buySellBitcoinCashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=array(    
            'product_logo'=>'https://bitxlanka.com/public/images/coins_icons/bitc_.png',
            'name'=>'Bitcoin Cash',
            'abbreviation'=>'BCH',
            'buying'=>'10.80 GHS',
            'selling'=>'10.00 GHS',
            'status'=>'inactive',
        );
        DB::table('buy_sell_rate_bitcoin_cashes')->insert($data);
    
    }
}
