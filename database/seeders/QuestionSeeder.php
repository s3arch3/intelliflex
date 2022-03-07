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
        $questions = [
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

            // QUIZ #3
            [
                'question' => 'What is a cyberattack simulation launched on your computer system, also known as ethical hacking?',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are people who are skilled in information technology who uses their technical knowledge to achieve a goal or overcome an obstacle, within a computerized system by non-standard means.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are ethical hackers that are generally security professionals specializing in various defense techniques.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are hackers who lacks programming knowledge and uses existing software to launch cyberattacks.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are computer security experts that may sometimes violate laws or typical ethical standard but does not have the malicious intent.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are hackers that violates computer security for their own personal profit or out of malice.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are hackers that conduct computer network operations at the direction of, or with the support of, a nation state.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are hackers that gains unauthorized access to computer files or networks in order to further social or political ends.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are hackers known for their vigilantism, doing anything and everything to stop black hat hackers.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'They are in charge of maintaining security protocols throughout their organizations. They are responsible for creating strategies to increase network and internet security related to different projects.',
                'explanation' => '',
                'quiz_id' => 3,
                'user_id' => 1,
                'is_active' => '1'
            ],

            // QUIZ #4
            [
                'question' => 'It is any set of rules that converts strings, or graphical program elements, to various kinds of machine code output.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'Which of the following are not programming languages?',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is a container for data.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is a language construct that specifies properties of an identifier: it declares what a word (identifier) means.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is the assignment of an initial value for a data object or variable. The manner in which it is performed depends on programming language, as well as type, storage class, etc.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is is a programming language construct or operator that tests or defines some kind of relation between two entities. These include numerical equality and inequalities.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is a set of rules for choosing the character sequence to be used for identifiers which denote variables, types, functions, and other entities in source code and documentation.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is an attribute of data which tells the compiler or interpreter how the programmer intends to use the data.',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'Which of the following are not examples of data types?',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What is a term that means a variable holds no value?',
                'explanation' => '',
                'quiz_id' => 4,
                'user_id' => 1,
                'is_active' => '1'
            ],

            // QUIZ #5
            [
                'question' => 'It is a collection of web pages and related content that is identified by a common domain name and published on at least one web server.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'What does HTML stand for?',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is the standard markup language for documents designed to be displayed in a web browser.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'Who created the first website?',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'One refers to the implementation of logic to facilitate specified computing operations and functionality. Another refers to the involvement of web design, web content development, client-side/server-side scripting and network security configuration.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'One refers to the language interpreted by the browser. Another refers to the language compiled by a compiler.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It is sometimes called a flat page or a stationary page, it is a web page that is delivered to the web browser of the user exactly as stored.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It refers to web pages are returned by the server which are processed during runtime, these pages are not prebuilt web pages but they are built during runtime according to the users demand.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It refers to or denoting the part of a computer system or application with which the user interacts directly.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
            [
                'question' => 'It refers to the part of a computer system or application that is not directly accessed by the user, typically responsible for storing and manipulating data.',
                'explanation' => '',
                'quiz_id' => 5,
                'user_id' => 1,
                'is_active' => '1'
            ],
        ];
        Question::insert($questions);
    }
}
