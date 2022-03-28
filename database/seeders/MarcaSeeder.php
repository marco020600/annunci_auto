<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marche')->insert([
            'nome' => 'Mercedes',
            'immagine' => 'Mercedes.png',
        ]);
    }
}
