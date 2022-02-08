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

            ['answer' => 'Liquefied Crystal Display', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 10],
            ['answer' => 'Liquid-Crystal Display', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 10],
            ['answer' => 'Links Collection Display', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 10],
            ['answer' => 'Lineage Cobalt Distros', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 10],

            ['answer' => 'a group of two or more devices or nodes that cannot communicate', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 11],
            ['answer' => 'a group of two or more devices or nodes that can communicate', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 11],
            ['answer' => 'a pair devices or nodes that can communicate', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 11],
            ['answer' => 'None of the above', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 11],

            ['answer' => 'Network topology is the arrangement of the elements of a communication network', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 12],
            ['answer' => 'Network topology is the creation of the elements of a communication network', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 12],
            ['answer' => 'Network topology is the connectivity of the elements of a communication network', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 12],
            ['answer' => 'All of the above', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 12],

            ['answer' => 'Mesh network topology', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 13],
            ['answer' => 'Bus network topology', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 13],
            ['answer' => 'Heart network topology', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 13],
            ['answer' => 'Hybrid network topology', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 13],

            ['answer' => 'Hardware', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 14],
            ['answer' => 'Syntax', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 14],
            ['answer' => 'Software', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 14],
            ['answer' => 'Protocol', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 14],

            ['answer' => 'Splicing tool', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 15],
            ['answer' => 'Crimping tool', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 15],
            ['answer' => 'RJ45', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 15],
            ['answer' => 'None of the above', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 15],

            ['answer' => 'Left-side cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 16],
            ['answer' => 'Straight-through cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 16],
            ['answer' => 'Right-side cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 16],
            ['answer' => 'Crossover cable', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 16],

            ['answer' => 'Left-side cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 17],
            ['answer' => 'Straight-through cable', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 17],
            ['answer' => 'Right-side cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 17],
            ['answer' => 'Crossover cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 17],

            ['answer' => 'Cat5 cable', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 18],
            ['answer' => 'Dog5 cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 18],
            ['answer' => 'Rollover cable', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 18],
            ['answer' => 'Optic Fiber', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 18],

            ['answer' => 'Orange, White Brown, White Green, White Blue, Blue, Green, Brown, White Orange', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 19],
            ['answer' => 'Green, White Green, White Orange, White Blue, Blue, Orange, Brown, White Brown', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 19],
            ['answer' => 'White Green, Green, White Orange, Blue, White Blue, Orange, White Brown, Brown', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 19],
            ['answer' => 'Orange, Orange, Green, Blue, Blue, Green, Brown, Brown', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 19],

            ['answer' => 'Orange, White Brown, White Green, White Blue, Blue, Green, Brown, White Orange', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 20],
            ['answer' => 'White Orange, Orange, White Green, Blue, White Blue, Green, White Brown, Brown', 'explanation' => '', 'is_checked' => '1', 'user_id' => 1, 'question_id' => 20],
            ['answer' => 'Green, White Green, White Orange, White Blue, Blue, Orange, Brown, White Brown', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 20],
            ['answer' => 'Green, Green, Orange, Blue, Blue, Orange, Brown, Brown', 'explanation' => '', 'is_checked' => '0', 'user_id' => 1, 'question_id' => 20],
        ];
        Answer::insert($answers);
    }
}
