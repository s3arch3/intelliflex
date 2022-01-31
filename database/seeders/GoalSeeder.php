<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Goal;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goals = [
            ['name' => 'Deja Vu!', 'description' => 'Repeat a quiz for the first time.', 'requirement' => 2],
            ['name' => 'It\'s Over Nine Thousand!', 'description' => 'Obtain a total amount of quiz points above 9000.', 'requirement' => 9000],
            ['name' => 'Wanderer\'s Advice', 'description' => 'Complete this quiz 10 times.', 'requirement' => 10],
            ['name' => 'Adventurer\'s Experience', 'description' => 'Complete this quiz 25 times.', 'requirement' => 25],
            ['name' => 'Hero\'s Wits', 'description' => 'Complete this quiz 50 times.', 'requirement' => 50],
            ['name' => 'Ace!', 'description' => 'Obtain perfect scores in a quiz five times in a row.', 'requirement' => 5],
            ['name' => 'Near Miss', 'description' => 'Obtain just one mistake in this quiz.', 'requirement' => 1]
        ];
        Goal::insert($goals);
    }
}
