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
            'is_active' => 1,
            'quiz_name' => 'Quiz#1',
            'quiz_description' => 'This is the description for Quiz#1.',
            'times_completed' => 0,
        ]);
        DB::table('quizzes')->insert([
            'is_active' => 1,
            'quiz_name' => 'Quiz#2',
            'quiz_description' => 'This is the description for Quiz#2.',
            'times_completed' => 0,
        ]);
    }
}
