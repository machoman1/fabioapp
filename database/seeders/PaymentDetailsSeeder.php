<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PaymentDetailsSeeder extends Seeder
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
            'momo_account_name'=>'Mohammed Awal Saeed',
            'momo_account_number'=>'+233 542039395',
            'bank_account_name'=>'Mohammed Awal Saeed',
            'bank_name'=>'HFC Bank',
            'bank_branch'=>'Winneba',
            'bank_account_number'=>'124875953555522',
        );
            
        DB::table('payment_details')->insert($data);
    
    }
}
