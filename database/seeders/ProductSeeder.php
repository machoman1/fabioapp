<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(    
            'product_logo'=>'https://assets-global.website-files.com/5f973c970bea5548ad4287ef/61e70d05f3c7146ab79e66bb_ethereum-eth.svg',
            'name'=>'Ethereum',
            'abbreviation'=>'ETH',
            'chart'=>'http://127.0.0.1:8000/image/ethwrom.png',
            'price'=>'1619.00 USD',
            'change_arrow'=>'up',
            'change_value'=>'7.32',
            'status'=>'inactive',
        );
        DB::table('products')->insert($data);
    
        
        $data=array(    
            'product_logo'=>'https://bitxlanka.com/public/images/coins_icons/bitc_.png',
            'name'=>'Bitcoin Cash',
            'abbreviation'=>'BCH',
            'chart'=>'http://127.0.0.1:8000/image/bit cash.png',
            'price'=>'118.00 USD',
            'change_arrow'=>'down',
            'change_value'=>'5.32',
            'status'=>'inactive',
        );
        DB::table('products')->insert($data);

        $data=array(    
            'product_logo'=>'https://metropolitan.fi/files/2018-01/bitcoin-logo.jpg',
            'name'=>'Bitcoin',
            'abbreviation'=>'BTC',
            'chart'=>'http://127.0.0.1:8000/image/bit coin.png',
            'price'=>'428.00 USD',
            'change_arrow'=>'up',
            'change_value'=>'3.32',
            'status'=>'active',
        );
        DB::table('products')->insert($data);

        $data=array(    
            'product_logo'=>'https://www.spectre.ai/assets/images/assets/LTC-logo.png?v=2.13',
            'name'=>'Litecoin',
            'abbreviation'=>'LTC',
            'chart'=>'http://127.0.0.1:8000/image/lite coin.png',
            'price'=>'858.00 USD',
            'change_arrow'=>'down',
            'change_value'=>'2.32',
            'status'=>'inactive',
        );
        DB::table('products')->insert($data);
    }
}
