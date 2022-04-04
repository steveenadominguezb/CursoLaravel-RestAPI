<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        //Correr la seed de categorias
        $this->call([
            CategoriesTableSeeder::class
        ]);
        //Correr factory de videogame que actua como seed de 100 registros aleatorios
        Videogame::factory(100)->create();
    }
}
