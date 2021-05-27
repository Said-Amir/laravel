<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'nom' => 'Famille',
            'description' => 'Album photos Familial.'
        ]);

        DB::table('albums')->insert([
            'nom' => 'Amis',
            'description' => 'Album photos entre amis.'
        ]);

        DB::table('albums')->insert([
            'nom' => 'Mariage',
            'description' => 'Album photos de mariage.'
        ]);
    }
}