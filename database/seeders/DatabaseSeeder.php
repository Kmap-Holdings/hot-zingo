<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Kenna Maphane',
            'email' => 'kenna@hotzingo.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Ndiye Nthoi',
            'email' => 'ndiye@hotzingo.com',
        ]);
    }
}
