<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comuni')->insert([
            'regione' => 'Molise',
            'provincia' => 'Campobasso',
            'comune' => 'Termoli'
        ]);
    }
}
