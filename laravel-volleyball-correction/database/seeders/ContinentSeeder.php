<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            "nom"=>"Europe",
            "created_at"=>now()
        ]);

        DB::table('continents')->insert([
            "nom"=>"Amérique du Sud",
            "created_at"=>now()
        ]);

        DB::table('continents')->insert([
            "nom"=>"Amérique du Nord",
            "created_at"=>now()
        ]);

        DB::table('continents')->insert([
            "nom"=>"Afrique",
            "created_at"=>now()
        ]);

        DB::table('continents')->insert([
            "nom"=>"Asie",
            "created_at"=>now()
        ]);
    }
}