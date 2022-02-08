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
            ['user_id' => 1,'is_active' => '1','name' => 'Introduction to Computing','description' => 'This quiz teaches quizzes you about the basics of computing.','times_completed' => 0],
            ['user_id' => 1,'is_active' => '1','name' => 'Living in the IT Era','description' => 'This quiz teaches quizzes you about the basics of IT concepts.','times_completed' => 0],

        ];
        Quiz::insert($quizzes);
    }
}
