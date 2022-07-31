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
        $this->call(CriteriaSeeder::class);
        $this->call(ValuesSeeder::class);
        $this->call(PlantsSeeder::class);
        $this->call(DataSeeder::class);
    }
}
