<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'user_id' => 1,
            'is_active' => 1,
            'name' => 'Quiz#1',
            'description' => 'This is the description for Quiz#1.',
            'times_completed' => 0,
        ]);
        DB::table('quizzes')->insert([
            'user_id' => 1,
            'is_active' => 1,
            'name' => 'Quiz#2',
            'description' => 'This is the description for Quiz#2.',
            'times_completed' => 0,
        ]);
    }
}
