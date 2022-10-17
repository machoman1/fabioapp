<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SellingDetailsSeeder extends Seeder
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
            'bitcoin_address'=>'3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5',
            'bitcoin_cash_address'=>'7FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5',
            'litecoin_address'=>'8FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5',
            'etheruem_address'=>'2FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5',
        );
            
        DB::table('selling_details')->insert($data);
    
    }
 
}
