<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::factory()->count(10)->create();
        /* DB::table('autors')->insert([
        [
            'nome'=>'J.K. Rowling',
            'biografia'=>'Autora da série Harry Potter',
            'data_nascimento'=>'1965-07-31',
        ],
        [
            'nome'=>'George R.R. Martin',
            'biografia'=>'Criador de As Crônicas de Gelo e Fogo',
            'data_nascimento'=>'1948-09-20',
        ],
        [
            'nome'=>'J.R.R. Tolkien',
            'biografia'=>'Criador das séries O Hobbit e O Senhor dos Anéis',
            'data_nascimento'=>'1892-01-03',
        ],
        ]); */
    }
}