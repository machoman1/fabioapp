<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CurrencyConversionSellingSeeder extends Seeder
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
            'dollars'=>'10.00',
            'bitcoin'=>'0.000051',
            'etherom'=>'0.00076',
            'litecoin'=>'0.019',
            'bitcoinCash'=>'0.0085',
            'fee'=>'2.00',
           
        );
        DB::table('currency_conversion_sellings')->insert($data);
    }
}
