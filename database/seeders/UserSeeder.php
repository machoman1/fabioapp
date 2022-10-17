<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
         {
    
            $data=array(    
                'name'=>'Fabio',
                'email'=>'admin@gmail.com',
                'phone'=>'0542039395',
                'password'=>Hash::make('123'),
                'role_as'=>'1',
            );
            DB::table('users')->insert($data);
        }
    }

