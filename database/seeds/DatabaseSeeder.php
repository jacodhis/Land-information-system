<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(rolestableSeeder::class);
         // $this->call(paysTableSeeder::class);
         $this->call(rolesTableSeeder::class);
         $this->call(accountsTableSeeder::class);
         $this->call(ownersTableseeder::class);
    }
}
