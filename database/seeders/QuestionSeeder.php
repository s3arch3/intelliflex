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
            ['question' => 'What is a computer?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What makes a device a computer?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What is an input device?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What is an output device?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What is a storage device?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What does IPO stand for?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What does CPU stand for?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'How many types of Monitors are there?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
            ['question' => 'What does GUI stand for?','explanation' => '','quiz_id' => 1,'user_id' => 1,'is_active' => '1'],
        ];
        Question::insert($questions);
    }
}
