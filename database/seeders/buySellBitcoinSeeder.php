<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class buySellBitcoinSeeder extends Seeder
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
            'product_logo'=>'https://metropolitan.fi/files/2018-01/bitcoin-logo.jpg',
            'name'=>'Bitcoin',
            'abbreviation'=>'BTC',
            'buying'=>'10.80 GHS',
            'selling'=>'10.00 GHS',
            'status'=>'inactive',
        );
        DB::table('buy_sell_rate_bitcoins')->insert($data);
    
    }
}
