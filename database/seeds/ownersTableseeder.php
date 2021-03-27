<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ownersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('owners')->insert([
        [
        	'name' => 'Loch Lucas',
        	'phone_number' => '0706746560',
        	'national_id' => '34604548',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' => ' Lucas Kamande',
        	'phone_number' => '0790876564',
        	'national_id' => '24604548',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' => ' Nicholus Ochola',
        	'phone_number' => '0706746561',
        	'national_id' => '34604558',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
         	'name' => ' Theophilus ',
        	'phone_number' => '0798763241',
        	'national_id' => '34604560',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
    ]);
}
}