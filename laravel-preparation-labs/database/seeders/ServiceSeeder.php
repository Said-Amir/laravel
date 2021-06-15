<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "icon"=>"bx-dribbble",
            "title"=>"Lorem Ipsum",
            "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
            "created_at"=>now()
        ]);

        DB::table("services")->insert([
            "icon"=>"bx-file",
            "title"=>"Sed ut perspiciatis",
            "description"=>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore",
            "created_at"=>now()
        ]);

        DB::table("services")->insert([
            "icon"=>"bx-tachometer",
            "title"=>"Magni Dolores",
            "description"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia",
            "created_at"=>now()
        ]);

        DB::table("services")->insert([
            "icon"=>"bx-layer",
            "title"=>"Nemo Enim",
            "description"=>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
            "created_at"=>now()
        ]);
    }
}