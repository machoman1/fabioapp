<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class buySellEtheromSeeder extends Seeder
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
            'product_logo'=>'https://assets-global.website-files.com/5f973c970bea5548ad4287ef/61e70d05f3c7146ab79e66bb_ethereum-eth.svg',
            'name'=>'Ethereum',
            'abbreviation'=>'ETH',
            'buying'=>'26.19 GHS',
            'selling'=>'10.10 GHS',
            'status'=>'inactive',
        );
        DB::table('buy_sell_rate_etheroms')->insert($data);
    
    }

}
