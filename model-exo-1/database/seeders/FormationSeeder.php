<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formations")->insert([
            "nom"=>"Formation Laravel",
            "description" => "Une super formation"
        ]);
        DB::table("formations")->insert([
            "nom"=>"Formation Vscode",
            "description" => "Une super formation"
        ]);
        DB::table("formations")->insert([
            "nom"=>"Formation Javascript",
            "description" => "Une super formation"
        ]);
        DB::table("formations")->insert([
            "nom"=>"Formation Photoshop",
            "description" => "Une super formation"
        ]);
        DB::table("formations")->insert([
            "nom"=>"Formation Powerpoint",
            "description" => "Une super formation"
        ]);
    }
}