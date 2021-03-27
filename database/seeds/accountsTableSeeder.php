<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class accountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('accounts')->insert([
        [
        	'user_id' => '1',
        	'amount' => '20000000',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
          [
        	'user_id' => '2',
        	'amount' => '70000000',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
          [
        	'user_id' => '3',
        	'amount' => '50000000',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
          [
        	'user_id' => '4',
        	'amount' => '40000000',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
          [
        	'user_id' => '5',
        	'amount' => '30000000',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],

    ]);
}
}
