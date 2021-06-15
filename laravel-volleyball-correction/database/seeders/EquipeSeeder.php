<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            "nom"=>"Sans Equipe",
            "ville"=>"Nulle Part",
            "pays"=>"Nulle Part",
            "logo"=>"noLogo.png",
            "max"=>2000,
            "att"=>500,
            "ct"=>500,
            "dc"=>500,
            "rp"=>500,
            "continent_id"=>1,
            "created_at"=>now()
        ]);
        
        DB::table('equipes')->insert([
            "nom"=>"Barça",
            "ville"=>"Barcelone",
            "pays"=>"Espagne",
            "logo"=>"barca2.png",
            "max"=>9,
            "att"=>2,
            "ct"=>2,
            "dc"=>2,
            "rp"=>3,
            "continent_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('equipes')->insert([
            "nom"=>"Real Madrid",
            "ville"=>"Madrid",
            "pays"=>"Espagne",
            "logo"=>"real.png",
            "max"=>10,
            "att"=>3,
            "ct"=>2,
            "dc"=>2,
            "rp"=>3,
            "continent_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('equipes')->insert([
            "nom"=>"Manchester City",
            "ville"=>"Manchester",
            "pays"=>"Angleterre",
            "logo"=>"mancity.png",
            "max"=>9,
            "att"=>2,
            "ct"=>2,
            "dc"=>2,
            "rp"=>3,
            "continent_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('equipes')->insert([
            "nom"=>"Manchester United",
            "ville"=>"Manchester",
            "pays"=>"Angleterre",
            "logo"=>"manutd.png",
            "max"=>9,
            "att"=>2,
            "ct"=>2,
            "dc"=>2,
            "rp"=>3,
            "continent_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('equipes')->insert([
            "nom"=>"Al-Ahly",
            "ville"=>"Le Caire",
            "pays"=>"Egypte",
            "logo"=>"noLogo.png",
            "max"=>9,
            "att"=>2,
            "ct"=>2,
            "dc"=>2,
            "rp"=>3,
            "continent_id"=>4,
            "created_at"=>now()
        ]);

    }
}