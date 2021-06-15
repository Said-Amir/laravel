<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            "image"=>"features-1.png",
            "title"=>"Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "fact1"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "fact2"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
            "fact3"=>"Ullam est qui quos consequatur eos accusamus.",
            "created_at"=>now()
        ]);

        DB::table('features')->insert([
            "image"=>"features-2.png",
            "title"=>"Corporis temporibus maiores provident",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "text"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "created_at"=>now()
        ]);

        DB::table('features')->insert([
            "image"=>"features-3.png",
            "title"=>"Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas",
            "description"=>"Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",
            "fact1"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "fact2"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
            "fact3"=>"Ullam est qui quos consequatur eos accusamus.",
            "created_at"=>now()
        ]);

        DB::table('features')->insert([
            "image"=>"features-4.png",
            "title"=>"Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "text"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "created_at"=>now()
        ]);

    }
}
