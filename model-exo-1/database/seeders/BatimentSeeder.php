<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("batiments")->insert([
            "nom"=>"Building",
            "description"=>"Un très beau batiment",
            "created_at"=>now()
        ]);
    }
}