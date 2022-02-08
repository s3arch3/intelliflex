<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions=[
            // QUIZ #1
            [
                'question' => 'What is a computer?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What makes a device a computer?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is an input device?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is an output device?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is a storage device?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What does IPO stand for?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What does CPU stand for?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'How many types of Monitors are there?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What does GUI stand for?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What does LCD stand for?',
                'explanation' => '',
                'quiz_id' => 1,
                'user_id' => 1,
                'is_active' => '1'
            ],
            // QUIZ #2
            [
                'question' => 'What is a network?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is a network topology?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'Which of the following is not a network topology?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'Which of the following is not an element of a network?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'Which of the following tools are not used for networking?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is a type of ethernet cable used to connect two same types of devices',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is a type of ethernet cable used to connect two different types of devices',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is a twisted pair cable that standardly provides performance of up to 100 MHz',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is the standard color pattern for straight-through cables?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is the standard color pattern for crossover cables?',
                'explanation' => '',
                'quiz_id' => 2,
                'user_id' => 1,
                'is_active' => '1'
            ],
        ];
        Question::insert($questions);
    }
}
