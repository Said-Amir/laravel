<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photos")->insert([
            "image"=>"player1.jpg",
            "joueur_id"=>1
        ]);

        DB::table("photos")->insert([
            "image"=>"player2.jfif",
            "joueur_id"=>2
        ]);

        DB::table("photos")->insert([
            "image"=>"player3.jfif",
            "joueur_id"=>3
        ]);

        DB::table("photos")->insert([
            "image"=>"player4.jpg",
            "joueur_id"=>4
        ]);

        DB::table("photos")->insert([
            "image"=>"player5.jfif",
            "joueur_id"=>5
        ]);

        DB::table("photos")->insert([
            "image"=>"player6.jfif",
            "joueur_id"=>6
        ]);

        DB::table("photos")->insert([
            "image"=>"player1.jpg",
            "joueur_id"=>7
        ]);

        DB::table("photos")->insert([
            "image"=>"player2.jfif",
            "joueur_id"=>8
        ]);

        DB::table("photos")->insert([
            "image"=>"player3.jfif",
            "joueur_id"=>9
        ]);

        DB::table("photos")->insert([
            "image"=>"player1.jpg",
            "joueur_id"=>10
        ]);

        DB::table("photos")->insert([
            "image"=>"player4.jpg",
            "joueur_id"=>11
        ]);

        DB::table("photos")->insert([
            "image"=>"player2.jfif",
            "joueur_id"=>12
        ]);
    }
}