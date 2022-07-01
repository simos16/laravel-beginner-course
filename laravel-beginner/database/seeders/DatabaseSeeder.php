<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notes;

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

        Notes::factory(6)->create();

       /* Notes::create([
                'titolo' => 'Nota molto interessante',
                'autore' => 'Simona',
                'email' => 'simo@simo.it',
                'contenuto' => 'Lorem ipsum dolor sit amet eu a nisl est feugiat eu rhoncus dictum praesent diam.'
            ]);

        Notes::create([
            'titolo' => 'Altra Nota molto interessante',
            'autore' => 'Mario',
            'email' => 'mario@mario.it',
            'contenuto' => 'Lorem ipsum dolor sit amet eu a nisl est feugiat eu rhoncus dictum praesent diam.'
        ]);*/
    }
}
