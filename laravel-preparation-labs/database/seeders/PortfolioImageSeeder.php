<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-1.jpg",
            "filter_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-2.jpg",
            "filter_id"=>3,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-3.jpg",
            "filter_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-4.jpg",
            "filter_id"=>2,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-5.jpg",
            "filter_id"=>3,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-6.jpg",
            "filter_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-7.jpg",
            "filter_id"=>2,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-8.jpg",
            "filter_id"=>2,
            "created_at"=>now()
        ]);

        DB::table('portfolio_images')->insert([
            "url"=>"portfolio-9.jpg",
            "filter_id"=>3,
            "created_at"=>now()
        ]);
    }
}