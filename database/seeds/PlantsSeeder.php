<?php

use Illuminate\Database\Seeder;

class PlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Plant::create([
            'name' => "Padi"
        ]);
        \App\Plant::create([
            'name' => "Jagung"
        ]);
        \App\Plant::create([
            'name' => "Talas"
        ]);
        \App\Plant::create([
            'name' => "Ubi Jalar"
        ]);
        \App\Plant::create([
            'name' => "Ubi Kayu"
        ]);
        \App\Plant::create([
            'name' => "Kacang Tanah"
        ]);
    }
}
