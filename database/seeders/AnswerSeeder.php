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
            [
                'answer' => 'Computer is a programmable device that stores, retrieves, and processes data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 1
            ],
            [
                'answer' => 'Computer is a programmable device that stores, retrieves, and processes energy',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 1
            ],
            [
                'answer' => 'Computer is a programmable device that stores, retrieves, and processes electricity',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 1
            ],
            [
                'answer' => 'All of the above',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 1
            ],
            //////////////////////
            [
                'answer' => 'It requires some form of electrcity to function',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 2
            ],
            [
                'answer' => 'It can process data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 2
            ],
            [
                'answer' => 'It can display data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 2
            ],
            [
                'answer' => 'All of the above',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 2
            ],
            //////////////////////
            [
                'answer' => 'Devices that creates data',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 3
            ],
            [
                'answer' => 'Devices that stores data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 3
            ],
            [
                'answer' => 'Devices that displays data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 3
            ],
            [
                'answer' => 'Devices that uses data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 3
            ],
            //////////////////////
            [
                'answer' => 'Devices that creates data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 4
            ],
            [
                'answer' => 'Devices that stores data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 4
            ],
            [
                'answer' => 'Devices that displays data',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 4
            ],
            [
                'answer' => 'Devices that uses data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 4
            ],
            //////////////////////
            [
                'answer' => 'Devices that creates data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 5
            ],
            [
                'answer' => 'Devices that stores data',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 5
            ],
            [
                'answer' => 'Devices that displays data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 5
            ],
            [
                'answer' => 'Devices that uses data',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 5
            ],
            //////////////////////
            [
                'answer' => 'Input, Process, Output',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 6
            ],
            [
                'answer' => 'Interface, Procedure, Outlet',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 6
            ],
            [
                'answer' => 'Internet, Plug-in, Overclock',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 6
            ],
            [
                'answer' => 'Intertwine, Phishing, Overheat',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 6
            ],
            //////////////////////
            [
                'answer' => 'Cache Processed Unit',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 7
            ],
            [
                'answer' => 'Computer Processing Unix',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 7
            ],
            [
                'answer' => 'Central Processing Unit',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 7
            ],
            [
                'answer' => 'Compression Processor Unix',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 7
            ],
            //////////////////////
            [
                'answer' => '3',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 8
            ],
            [
                'answer' => '4',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 8
            ],
            [
                'answer' => '1',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 8
            ],
            [
                'answer' => '2',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 8
            ],
            //////////////////////
            [
                'answer' => 'Graphical Unit Interface',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 9
            ],
            [
                'answer' => 'Graphical User Interface',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 9
            ],
            [
                'answer' => 'Graphical User Internet',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 9
            ],
            [
                'answer' => 'Graphical Universal Interface',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 9
            ],
            //////////////////////
            [
                'answer' => 'Liquefied Crystal Display',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 10
            ],
            [
                'answer' => 'Liquid-Crystal Display',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 10
            ],
            [
                'answer' => 'Links Collection Display',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 10
            ],
            [
                'answer' => 'Lineage Cobalt Distros',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 10
            ],
            //////////////////////
            [
                'answer' => 'A group of two or more devices or nodes that cannot communicate',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 11
            ],
            [
                'answer' => 'A group of two or more devices or nodes that can communicate',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 11
            ],
            [
                'answer' => 'A pair devices or nodes that can communicate',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 11
            ],
            [
                'answer' => 'None of the above',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 11
            ],
            //////////////////////
            [
                'answer' => 'Network topology is the arrangement of the elements of a communication network',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 12
            ],
            [
                'answer' => 'Network topology is the creation of the elements of a communication network',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 12
            ],
            [
                'answer' => 'Network topology is the connectivity of the elements of a communication network',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 12
            ],
            [
                'answer' => 'All of the above',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 12
            ],
            //////////////////////
            [
                'answer' => 'Mesh network topology',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 13
            ],
            [
                'answer' => 'Bus network topology',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 13
            ],
            [
                'answer' => 'Heart network topology',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 13
            ],
            [
                'answer' => 'Hybrid network topology',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 13
            ],
            //////////////////////
            [
                'answer' => 'Hardware',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 14
            ],
            [
                'answer' => 'Syntax',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 14
            ],
            [
                'answer' => 'Software',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 14
            ],
            [
                'answer' => 'Protocol',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 14
            ],
            //////////////////////
            [
                'answer' => 'Splicing tool',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 15
            ],
            [
                'answer' => 'Crimping tool',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 15
            ],
            [
                'answer' => 'RJ45',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 15
            ],
            [
                'answer' => 'None of the above',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 15
            ],
            //////////////////////
            [
                'answer' => 'Left-side cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 16
            ],
            [
                'answer' => 'Straight-through cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 16
            ],
            [
                'answer' => 'Right-side cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 16
            ],
            [
                'answer' => 'Crossover cable',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 16
            ],
            //////////////////////
            [
                'answer' => 'Left-side cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 17
            ],
            [
                'answer' => 'Straight-through cable',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 17
            ],
            [
                'answer' => 'Right-side cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 17
            ],
            [
                'answer' => 'Crossover cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 17
            ],
            //////////////////////
            [
                'answer' => 'Cat5 cable',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 18
            ],
            [
                'answer' => 'Dog5 cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 18
            ],
            [
                'answer' => 'Rollover cable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 18
            ],
            [
                'answer' => 'Optic Fiber',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 18
            ],
            //////////////////////
            [
                'answer' => 'Orange, White Brown, White Green, White Blue, Blue, Green, Brown, White Orange',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 19
            ],
            [
                'answer' => 'Green, White Green, White Orange, White Blue, Blue, Orange, Brown, White Brown',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 19
            ],
            [
                'answer' => 'White Green, Green, White Orange, Blue, White Blue, Orange, White Brown, Brown',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 19
            ],
            [
                'answer' => 'Orange, Orange, Green, Blue, Blue, Green, Brown, Brown',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 19
            ],
            //////////////////////
            [
                'answer' => 'Orange, White Brown, White Green, White Blue, Blue, Green, Brown, White Orange',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 20
            ],
            [
                'answer' => 'White Orange, Orange, White Green, Blue, White Blue, Green, White Brown, Brown',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 20
            ],
            [
                'answer' => 'Green, White Green, White Orange, White Blue, Blue, Orange, Brown, White Brown',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 20
            ],
            [
                'answer' => 'Green, Green, Orange, Blue, Blue, Orange, Brown, Brown',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 20
            ],
            //////////////////////
            [
                'answer' => 'Impalation testing',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 21
            ],
            [
                'answer' => 'Penetration testing',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 21
            ],
            [
                'answer' => 'Principle hacking',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 21
            ],
            [
                'answer' => 'Spiking testing',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 21
            ],
            //////////////////////
            [
                'answer' => 'Hacker',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 22
            ],
            [
                'answer' => 'Debugger',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 22
            ],
            [
                'answer' => 'Coder',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 22
            ],
            [
                'answer' => 'Beta tester',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 22
            ],
            //////////////////////
            [
                'answer' => 'Gray hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 23
            ],
            [
                'answer' => 'Black hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 23
            ],
            [
                'answer' => 'White hat hacker',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 23
            ],
            [
                'answer' => 'Script Kiddies',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 23
            ],
            //////////////////////
            [
                'answer' => 'State sponsored hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 24
            ],
            [
                'answer' => 'Black hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 24
            ],
            [
                'answer' => 'White hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 24
            ],
            [
                'answer' => 'Script Kiddies',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 24
            ],
            //////////////////////
            [
                'answer' => 'Gray hat hacker',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 25
            ],
            [
                'answer' => 'Black hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 25
            ],
            [
                'answer' => 'White hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 25
            ],
            [
                'answer' => 'State sponsored hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 25
            ],
            //////////////////////
            [
                'answer' => 'Gray hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 26
            ],
            [
                'answer' => 'Black hat hacker',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 26
            ],
            [
                'answer' => 'White hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 26
            ],
            [
                'answer' => 'Hacktivist',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 26
            ],
            //////////////////////
            [
                'answer' => 'Red hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 27
            ],
            [
                'answer' => 'Hacktivist',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 27
            ],
            [
                'answer' => 'Script Kiddies',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 27
            ],
            [
                'answer' => 'State sponsored hacker',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 27
            ],
            //////////////////////
            [
                'answer' => 'Black hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 28
            ],
            [
                'answer' => 'Hacktivist',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 28
            ],
            [
                'answer' => 'Script Kiddies',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 28
            ],
            [
                'answer' => 'State sponsored hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 28
            ],
            //////////////////////
            [
                'answer' => 'Red hat hacker',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 29
            ],
            [
                'answer' => 'Hacktivist',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 29
            ],
            [
                'answer' => 'Script Kiddies',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 29
            ],
            [
                'answer' => 'Blue hat hacker',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 29
            ],
            //////////////////////
            [
                'answer' => 'Information computer manager',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 30
            ],
            [
                'answer' => 'Information technology manager',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 30
            ],
            [
                'answer' => 'Information security manager',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 30
            ],
            [
                'answer' => 'Information system manager',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 30
            ],
            //////////////////////
            [
                'answer' => 'Initialization',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 31
            ],
            [
                'answer' => 'Variable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 31
            ],
            [
                'answer' => 'Programming language',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 31
            ],
            [
                'answer' => 'None of the above',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 31
            ],
            //////////////////////
            [
                'answer' => 'C#',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 32
            ],
            [
                'answer' => 'Ruby',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 32
            ],
            [
                'answer' => 'Python',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 32
            ],
            [
                'answer' => 'HTML',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 32
            ],
            //////////////////////
            [
                'answer' => 'Relational Operators',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 33
            ],
            [
                'answer' => 'Variable',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 33
            ],
            [
                'answer' => 'Programming language ',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 33
            ],
            [
                'answer' => 'None of the above',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 33
            ],
            //////////////////////
            [
                'answer' => 'Variable declaration',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 34
            ],
            [
                'answer' => 'Naming conventions',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 34
            ],
            [
                'answer' => 'Data type',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 34
            ],
            [
                'answer' => 'Programming language',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 34
            ],
            //////////////////////
            [
                'answer' => 'Variable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 35
            ],
            [
                'answer' => 'Data types',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 35
            ],
            [
                'answer' => 'Naming convention',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 35
            ],
            [
                'answer' => 'Initialization',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 35
            ],
            //////////////////////
            [
                'answer' => 'Relational Operators',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 36
            ],
            [
                'answer' => 'Variable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 36
            ],
            [
                'answer' => 'Programming language',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 36
            ],
            [
                'answer' => 'Data types',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 36
            ],
            //////////////////////
            [
                'answer' => 'Variable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 37
            ],
            [
                'answer' => 'Data types',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 37
            ],
            [
                'answer' => 'Naming convention',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 37
            ],
            [
                'answer' => 'Initialization',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 37
            ],
            //////////////////////
            [
                'answer' => 'Variable',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 38
            ],
            [
                'answer' => 'Data types',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 38
            ],
            [
                'answer' => 'Naming convention',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 38
            ],
            [
                'answer' => 'Initialization',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 38
            ],
            //////////////////////
            [
                'answer' => 'float',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 39
            ],
            [
                'answer' => 'int',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 39
            ],
            [
                'answer' => 'char',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 39
            ],
            [
                'answer' => 'Null',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 39
            ],
            //////////////////////
            [
                'answer' => 'float',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 40
            ],
            [
                'answer' => 'int',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 40
            ],
            [
                'answer' => 'char',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 40
            ],
            [
                'answer' => 'Null',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 40
            ],
            //////////////////////
            [
                'answer' => 'Web Analytics',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 41
            ],
            [
                'answer' => 'Web Browser',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 41
            ],
            [
                'answer' => 'Website',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 41
            ],
            [
                'answer' => 'Internet',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 41
            ],
            //////////////////////
            [
                'answer' => 'HyperText Markup Language',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 42
            ],
            [
                'answer' => 'HyperTonic Markup Logistics',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 42
            ],
            [
                'answer' => 'HyperText Markup Leeway',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 42
            ],
            [
                'answer' => 'HyperTax Markup Language',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 42
            ],
            //////////////////////
            [
                'answer' => 'Javascript',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 43
            ],
            [
                'answer' => 'HTML',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 43
            ],
            [
                'answer' => 'Laravel',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 43
            ],
            [
                'answer' => 'CSS',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 43
            ],
            //////////////////////
            [
                'answer' => 'Jim Turner-Lee',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 44
            ],
            [
                'answer' => 'Tim Burns-Lee',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 44
            ],
            [
                'answer' => 'Tim Bruce-Lee',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 44
            ],
            [
                'answer' => 'Tim Berners-Lee',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 44
            ],
            //////////////////////
            [
                'answer' => 'Markup language and programming language',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 45
            ],
            [
                'answer' => 'Programmer and web developer',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 45
            ],
            [
                'answer' => 'Morse language and braile language',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 45
            ],
            [
                'answer' => 'Programming and web development',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 45
            ],
            //////////////////////
            [
                'answer' => 'Markup language and programming language',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 46
            ],
            [
                'answer' => 'Programmer and web developer',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 46
            ],
            [
                'answer' => 'Morse language and braile language',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 46
            ],
            [
                'answer' => 'Programming and web development',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 46
            ],
            //////////////////////
            [
                'answer' => 'Group-website',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 47
            ],
            [
                'answer' => 'Static website',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 47
            ],
            [
                'answer' => 'Multi-website',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 47
            ],
            [
                'answer' => 'Dynamic website',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 47
            ],
            //////////////////////
            [
                'answer' => 'Flex-website',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 48
            ],
            [
                'answer' => 'Static website',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 48
            ],
            [
                'answer' => 'Multi-website',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 48
            ],
            [
                'answer' => 'Dynamic website',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 48
            ],
            //////////////////////
            [
                'answer' => 'Near-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 49
            ],
            [
                'answer' => 'Back-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 49
            ],
            [
                'answer' => 'Front-end',
                'explanation' => '',
                'is_checked' => '1',
                'user_id' => 1,
                'question_id' => 49
            ],
            [
                'answer' => 'Side-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 49
            ],
            //////////////////////
            [
                'answer' => 'Near-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 50
            ],
            [
                'answer' => 'Back-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 50
            ],
            [
                'answer' => 'Front-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 50
            ],
            [
                'answer' => 'Side-end',
                'explanation' => '',
                'is_checked' => '0',
                'user_id' => 1,
                'question_id' => 50
            ],
            //////////////////////
        ];
        Answer::insert($answers);
    }
}
