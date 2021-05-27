<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "poste"=>"Avant",
            "created_at"=>now()
        ]);

        DB::table("roles")->insert([
            "poste"=>"Central",
            "created_at"=>now()
        ]);

        DB::table("roles")->insert([
            "poste"=>"Arrière",
            "created_at"=>now()
        ]);

        DB::table("roles")->insert([
            "poste"=>"Remplaçant",
            "created_at"=>now()
        ]);
    }
}