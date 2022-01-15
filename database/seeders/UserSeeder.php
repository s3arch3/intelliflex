<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Custom seeder that I made for initial accounts.
     * @return void
     */
    public function run()
    {
        // User 1
        DB::table('users')->insert([
            'name' => 'Serge Ivon E. Vibiesca',
            'email' => '21vibiesca@gmail.com',
            'password' => Hash::make('@intelliflex123!')
        ]);
        // User 2
        DB::table('users')->insert([
            'name' => 'Marie Joy B. Barruela',
            'email' => 'barruela.mjoy@gmail.com',
            'password' => Hash::make('@intelliflex123!')
        ]);
        // User 3
        DB::table('users')->insert([
            'name' => 'Cyrus Jeurell Y. Villanueva',
            'email' => 'sairasujeurell@gmail.com',
            'password' => Hash::make('@intelliflex123!')
        ]);
        // User 4
        DB::table('users')->insert([
            'name' => 'Julius John S. Aluran',
            'email' => 'aluran12@gmail.com',
            'password' => Hash::make('@intelliflex123!')
        ]);
    }
}
