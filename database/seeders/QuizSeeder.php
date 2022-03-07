<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes=[
            [
                'user_id' => 1,
                'is_active' => '1',
                'name' => 'Introduction to Computing',
                'description' => 'This quiz teaches quizzes you about the basics of computing.',
                'times_completed' => 0
            ],
            [
                'user_id' => 1,
                'is_active' => '1',
                'name' => 'Living in the IT Era',
                'description' => 'This quiz teaches quizzes you about the basics of IT concepts.',
                'times_completed' => 0
            ],
            [
                'user_id' => 1,
                'is_active' => '1',
                'name' => 'Professional Issues in Information System',
                'description' => 'This quiz teaches quizzes you about the ethics inside the company.',
                'times_completed' => 0
            ],
            [
                'user_id' => 1,
                'is_active' => '1',
                'name' => 'Computer Programming I',
                'description' => 'This quiz teaches quizzes you about the basics of computer programming.',
                'times_completed' => 0
            ],
            [
                'user_id' => 1,
                'is_active' => '1',
                'name' => 'Web Development I',
                'description' => 'This quiz teaches quizzes you about the basics of web development.',
                'times_completed' => 0
            ],
        ];
        Quiz::insert($quizzes);
    }
}
