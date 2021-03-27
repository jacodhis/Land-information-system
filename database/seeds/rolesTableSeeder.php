<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('roles')->insert([
        [
        	'name' =>'Admin',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],

        [
        	'name' =>'user',
        	
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],

       
    ]);

    }
}
