<?php

use Illuminate\Database\Seeder;

class ValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Value::create([
            'value' => "Sangat Sesuai",
            'parameter' => 1
        ]);
        \App\Value::create([
            'value' => "Cukup Sesuai",
            'parameter' => 2
        ]);
        \App\Value::create([
            'value' => "Rata-rata",
            'parameter' => 3
        ]);
        \App\Value::create([
            'value' => "Tidak Sesuai",
            'parameter' => 4
        ]);
    }
}
