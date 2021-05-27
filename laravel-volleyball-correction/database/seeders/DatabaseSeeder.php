<?php

namespace Database\Seeders;

use App\Models\Continent;
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
        $this->call(ContinentSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(EquipeSeeder::class);
        \App\Models\Joueur::factory(12)->create();
        $this->call(PhotoSeeder::class);
    }
}