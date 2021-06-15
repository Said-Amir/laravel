<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("homes")->insert([
            "button"=>"Get Started",
            "image"=>"hero-img.png",
            "title"=>"Build Better Websites With Bikin",
            "sub-title"=>"We are team of talented designers making websites with Bootstrap",
            "created_at"=>now()
        ]);
    }
}
