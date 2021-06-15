<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutFactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_facts')->insert([
            "icon"=>"bx-receipt",
            "title"=>"Corporis voluptates sit",
            "description"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
            "about_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('about_facts')->insert([
            "icon"=>"bx-cube-alt",
            "title"=>"Ullamco laboris nisi",
            "description"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
            "about_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('about_facts')->insert([
            "icon"=>"bx-images",
            "title"=>"Labore consequatur",
            "description"=>"Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
            "about_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('about_facts')->insert([
            "icon"=>"bx-shield",
            "title"=>"Beatae veritatis",
            "description"=>"Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",
            "about_id"=>1,
            "created_at"=>now()
        ]);
    }
}
