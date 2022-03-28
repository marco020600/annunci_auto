<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annunci')->insert([
            'stato' => 'usato',
            'titolo' => 'Annuncio 1',
            'prezzo' => 10,
            'chilometraggio' => 100000,
            'immatricolazione' => '2000-01-01',
            'potenza' => 75,
            'cilindrata' => '1500 cm cubi',
            'colore' => 'blu',
            'alimentazione' => 'benzina',
            'carrozzeria' => 'Monovolume' ,
            'descrizione' => 'bella macchina',
            'indirizzo' => 'via Firenze 15',
            'user_id' => 1,
            'modello_id' => 1,
            'comune_id' => 1
        ]);
    }
}
