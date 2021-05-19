<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("type_formations")->insert([
            "type"=>"Formation Longue",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Check Tic",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Formation courte",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Bilal Js",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Nico Youtube",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Udemy",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Actiris",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Bruxelles-formation",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Antoine Design",
            "created_at"=>now()
        ]);
        DB::table("type_formations")->insert([
            "type"=>"Elias PHP",
            "created_at"=>now()
        ]);
    }
}