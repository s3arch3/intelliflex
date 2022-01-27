<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            ['answer' => 'Computer is a programmable device that stores, retrieves, and processes data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 1],
            ['answer' => 'Computer is a programmable device that stores, retrieves, and processes energy', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 1],
            ['answer' => 'Computer is a programmable device that stores, retrieves, and processes electricity', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 1],
            ['answer' => 'All of the above', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 1],

            ['answer' => 'It requires some form of electrcity to function', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 2],
            ['answer' => 'It can process data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 2],
            ['answer' => 'It can display data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 2],
            ['answer' => 'All of the above', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 2],

            ['answer' => 'Devices that creates data', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 3],
            ['answer' => 'Devices that stores data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 3],
            ['answer' => 'Devices that displays data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 3],
            ['answer' => 'Devices that uses data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 3],

            ['answer' => 'Devices that creates data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 4],
            ['answer' => 'Devices that stores data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 4],
            ['answer' => 'Devices that displays data', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 4],
            ['answer' => 'Devices that uses data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 4],

            ['answer' => 'Devices that creates data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 5],
            ['answer' => 'Devices that stores data', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 5],
            ['answer' => 'Devices that displays data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 5],
            ['answer' => 'Devices that uses data', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 5],

            ['answer' => 'Input, Process, Output', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 6],
            ['answer' => 'Interface, Procedure, Outlet', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 6],
            ['answer' => 'Internet, Plug-in, Overclock', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 6],
            ['answer' => 'Intertwine, Phishing, Overheat', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 6],

            ['answer' => 'Cache Processed Unit', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 7],
            ['answer' => 'Computer Processing Unix', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 7],
            ['answer' => 'Central Processing Unit', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 7],
            ['answer' => 'Compression Processor Unix', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 7],

            ['answer' => '3', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 8],
            ['answer' => '4', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 8],
            ['answer' => '1', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 8],
            ['answer' => '2', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 8],

            ['answer' => 'Graphical Unit Interface', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 9],
            ['answer' => 'Graphical User Interface', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 9],
            ['answer' => 'Graphical User Internet', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 9],
            ['answer' => 'Graphical Universal Interface', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 9],
        ];
        Answer::insert($answers);
    }
}
