<?php

namespace Database\Seeders;

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
        $this->call([
            AnnuncioSeeder::class,
            ComuneSeeder::class,
            DettagliSeeder::class,
            MarcaSeeder::class,
            ModelloSeeder::class,
            RecensioneSeeder::class,
        ]);
    }
}
