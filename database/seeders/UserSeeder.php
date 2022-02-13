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
        // PROFESSOR LIST //
        // PROFESSOR LIST //
        // PROFESSOR LIST //

        // Professor 1
        DB::table('users')->insert([
            'name' => 'Michael', 'email' => 'michael@gmail.com',
            'user_type' => 'professor', 'password' => Hash::make('@intelliflex123!')
        ]);
        // Professor 2
        DB::table('users')->insert([
            'name' => 'Vince', 'email' => 'vince@gmail.com',
            'user_type' => 'professor', 'password' => Hash::make('@intelliflex123!')
        ]);

        // STUDENT LIST //
        // STUDENT LIST //
        // STUDENT LIST //

        // Student 1
        DB::table('users')->insert([
            'name' => 'Serge', 'email' => 'serge@gmail.com',
            'user_type' => 'student', 'password' => Hash::make('@intelliflex123!')
        ]);
        // Student 2
        DB::table('users')->insert([
            'name' => 'Joy', 'email' => 'joy@gmail.com',
            'user_type' => 'student', 'password' => Hash::make('@intelliflex123!')
        ]);
        // Student 3
        DB::table('users')->insert([
            'name' => 'Jeurell', 'email' => 'jeurell@gmail.com',
            'user_type' => 'student', 'password' => Hash::make('@intelliflex123!')
        ]);
        // Student 4
        DB::table('users')->insert([
            'name' => 'Julius', 'email' => 'julius@gmail.com',
            'user_type' => 'student', 'password' => Hash::make('@intelliflex123!')
        ]);
        // Student 5
        DB::table('users')->insert([
            'name' => 'Gabriel', 'email' => 'gabriel@gmail.com',
            'user_type' => 'student', 'password' => Hash::make('@intelliflex123!')
        ]);

        // ADMIN LIST //
        // ADMIN LIST //
        // ADMIN LIST //

        // Admin 1
        DB::table('users')->insert([
            'name' => 'Notch', 'email' => 'notch@gmail.com',
            'user_type' => 'admin', 'password' => Hash::make('@intelliflex123!')
        ]);
    }
}
