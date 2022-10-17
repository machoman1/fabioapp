<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class buySellLitecoinSeeder extends Seeder
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
            'product_logo'=>'https://www.spectre.ai/assets/images/assets/LTC-logo.png?v=2.13',
            'name'=>'Litecoin',
            'abbreviation'=>'LTC',
            'buying'=>'55.19 GHS',
            'selling'=>'40.10 GHS',
            'status'=>'inactive',
        );
        DB::table('buy_sell_rate_litcoins')->insert($data);
    
    }
}
