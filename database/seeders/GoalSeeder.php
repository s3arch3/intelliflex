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

            // 'timesCompleted',
            ['requirement' => 2, 'category' => 'timesCompleted',
            'name' => 'Déjà Vu.', 'description' => 'Complete a quiz 2 times.'],
            ['requirement' => 10, 'category' => 'timesCompleted',
            'name' => 'Wanderer\'s advice.', 'description' => 'Complete a quiz 10 times.'],
            ['requirement' => 25, 'category' => 'timesCompleted',
            'name' => 'Adventurer\'s Experience.', 'description' => 'Complete a quiz 25 times.'],
            ['requirement' => 50, 'category' => 'timesCompleted',
            'name' => 'Hero\'s Wits.', 'description' => 'Complete a quiz 50 times.'],
            ['requirement' => 100, 'category' => 'timesCompleted',
            'name' => 'Sage\'s Wisdom.', 'description' => 'Complete a quiz 100 times.'],

            // 'totalScore',
            ['requirement' => 10, 'category' => 'totalScore',
            'name' => 'Move Up. Hit \'Em Up.', 'description' => 'Obtain more than 10 points in a quiz.'],
            ['requirement' => 100, 'category' => 'totalScore',
            'name' => 'Are we there yet?', 'description' => 'Obtain more than 100 points in a quiz.'],
            ['requirement' => 500, 'category' => 'totalScore',
            'name' => 'Yes. Really? No!', 'description' => 'Obtain more than 500 points in a quiz.'],
            ['requirement' => 1000, 'category' => 'totalScore',
            'name' => 'Bop. Bop. Bop.', 'description' => 'Obtain more than 1000 points in a quiz.'],
            ['requirement' => 9000, 'category' => 'totalScore',
            'name' => 'It\'s Over 9000!', 'description' => 'Obtain more than 9000 points in a quiz.'],

            // 'accuracy',
            ['requirement' => 0, 'category' => 'accuracy',
            'name' => 'From Rags.', 'description' => 'Obtain 0% accuracy in a quiz.'],
            ['requirement' => 100, 'category' => 'accuracy',
            'name' => 'To Riches.', 'description' => 'Obtain 100% accuracy in a quiz.'],

            // 'perfectStreak',
            ['requirement' => 5, 'category' => 'perfectStreak',
            'name' => 'High Card.', 'description' => 'Obtain 5 perfect streaks in a quiz.'],
            ['requirement' => 10, 'category' => 'perfectStreak',
            'name' => 'Full House.', 'description' => 'Obtain 10 perfect streaks in a quiz.'],
            ['requirement' => 20, 'category' => 'perfectStreak',
            'name' => 'Four of a Kind.', 'description' => 'Obtain 20 perfect streaks in a quiz.'],
            ['requirement' => 50, 'category' => 'perfectStreak',
            'name' => 'Straight Flush.', 'description' => 'Obtain 50 perfect streaks in a quiz.'],
            ['requirement' => 100, 'category' => 'perfectStreak',
            'name' => 'Royal Flush.', 'description' => 'Obtain 100 perfect streaks in a quiz.'],

            // 'correctItems'
            ['requirement' => 1, 'category' => 'correctItems',
            'name' => 'Near Miss.', 'description' => 'Obtain only one error in a quiz.'],
        ];
        Goal::insert($goals);
    }
}
