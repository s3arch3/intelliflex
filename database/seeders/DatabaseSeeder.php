<?php

namespace Database\Seeders;

use App\Models\Answer;
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
            UserSeeder::class, // For user credentials for my groupmates.
            GroupProfessorSeeder::class, // For all the groups professors created.
            GroupStudentSeeder::class, // For all the groups that the student joined.
            QuizSeeder::class, // For quiz seeds
            GroupQuizSeeder::class, // For the added quizzes by the professor.
            QuestionSeeder::class, // for question seeding
            AnswerSeeder::class, // for answer choices to each question existing
            GoalSeeder::class // for running the goals
        ]);
    }
}
