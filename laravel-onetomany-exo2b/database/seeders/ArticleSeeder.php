<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "nom"=> 'Visite école 19',
            "img"=> 'url',
            "description"=> 'Visite de lecole 19 avec molengeek',
            "categorie"=> 'Sortie scolaire',
            "nda"=> 'Maktabi Said',
            "ddp"=> '2021-06-19',
        ]);

        DB::table("articles")->insert([
            "nom"=> 'Visite école 19',
            "img"=> 'url',
            "description"=> 'Visite de lecole 19 avec molengeek',
            "categorie"=> 'Sortie scolaire',
            "nda"=> 'Maktabi Said',
            "ddp"=> '2021-06-19',
        ]);
    }
}