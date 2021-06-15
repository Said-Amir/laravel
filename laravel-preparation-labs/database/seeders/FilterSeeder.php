<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("filters")->insert([
            "type"=>"app",
            "created_at"=>now()
        ]);

        DB::table("filters")->insert([
            "type"=>"card",
            "created_at"=>now()
        ]);

        DB::table("filters")->insert([
            "type"=>"web",
            "created_at"=>now()
        ]);
    }
}
