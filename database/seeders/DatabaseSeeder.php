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
        \App\Models\User::factory()->create([
            'name' => 'Andrés',
            'email' => 'pruebas@gmail.com',
            'password' => bcrypt('123'),
        ]);
        \App\Models\User::factory(10)->create();

        \App\Models\Country::factory()->create(['name' => 'Colombia']);
        \App\Models\Country::factory()->create(['name' => 'Venezuela']);
        //\App\Models\Country::factory(50)->create();
    }
}
