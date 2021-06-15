<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FeatureSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(SiteSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(AboutFactSeeder::class);
        $this->call(FilterSeeder::class);
        $this->call(PortfolioImageSeeder::class);
        $this->call(TitreSeeder::class);
    }
}