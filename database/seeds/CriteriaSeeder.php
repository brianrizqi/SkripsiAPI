<?php

use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Criteria::create([
            'kriteria' => 'Suhu',
            'bobot' => 20
        ]);
        \App\Criteria::create([
            'kriteria' => 'Curah Hujan',
            'bobot' => 25
        ]);
        \App\Criteria::create([
            'kriteria' => 'Tekstur Tanah',
            'bobot' => 15
        ]);
        \App\Criteria::create([
            'kriteria' => 'Kedalaman Tanah',
            'bobot' => 5
        ]);
        \App\Criteria::create([
            'kriteria' => 'PH',
            'bobot' => 15
        ]);
        \App\Criteria::create([
            'kriteria' => 'Bahaya Erosi',
            'bobot' => 5
        ]);
        \App\Criteria::create([
            'kriteria' => 'Drainase',
            'bobot' => 5
        ]);
        \App\Criteria::create([
            'kriteria' => 'Rotasi Tanam',
            'bobot' => 10
        ]);
    }
}
