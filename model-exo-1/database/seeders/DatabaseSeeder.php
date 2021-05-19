<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Database\Factories\EleveFactory;
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
        \App\Models\User::factory(10)->create();
        $this->call(BatimentSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(TypeFormationSeeder::class);
        Eleve::factory(50)->create();
    }
}