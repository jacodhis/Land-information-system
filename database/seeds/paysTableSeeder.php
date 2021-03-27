<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class paysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('pays')->insert([
        [
        	'account_number' => '12345678',
        	'amount' => '20000000',
        	'land_id' => '1',
        	'user_id' => '1',
        	'leasing' => 'leasing',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],

        [
        	'account_number' => '34604548',
        	'amount' => '30000000',
        	'land_id' => '2',
        	'user_id' => '1',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'), 
        ],
        [
           	'account_number' => '87654321',
        	'amount' => '400000',
        	'land_id' => '3',
        	'user_id' => '2',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'), 
        ],
        

       
    ]);

    }
}
