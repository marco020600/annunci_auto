<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DettagliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dettagli')->insert([
            'proprietari' => 1,
            'cambio' => 'automatico',
            'vernice' => 'blu',
            'rivestimenti' => 'ajdhd',
            'posti' => 5,
            'porte' => 4,
            'consumi' => 'ahshhs',
            'emissioni' => 'djhdhdh',
            'equipaggiamento' => 'shdhdd'
        ]);
    }
}
