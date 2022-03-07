<?php

namespace Database\Seeders;

use App\Models\GroupQuiz;
use Illuminate\Database\Seeder;

class GroupQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupQuizzes=[
            //BSIS 4-A added quizzes.
            [ 'user_id' => 1, 'group_professor_id' => 1, 'quiz_id' => 1],
            [ 'user_id' => 1, 'group_professor_id' => 1, 'quiz_id' => 2],

        ];
        GroupQuiz::insert($groupQuizzes);
    }
}
