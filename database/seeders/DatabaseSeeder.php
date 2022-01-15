<?php

namespace Database\Seeders;

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
        // Calls the UserSeeder that I created.
        $this->call([
            UserSeeder::class // For user credentials for my groupmates.
        ]);
    }
}
