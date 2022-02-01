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
            'name' => 'timesCompleted #1', 'description' => 'timesCompleted desc #1'],
            ['requirement' => 10, 'category' => 'timesCompleted',
            'name' => 'timesCompleted #2', 'description' => 'timesCompleted desc #2'],
            ['requirement' => 25, 'category' => 'timesCompleted',
            'name' => 'timesCompleted #3', 'description' => 'timesCompleted desc #3'],
            ['requirement' => 50, 'category' => 'timesCompleted',
            'name' => 'timesCompleted #4', 'description' => 'timesCompleted desc #4'],
            ['requirement' => 100, 'category' => 'timesCompleted',
            'name' => 'timesCompleted #5', 'description' => 'timesCompleted desc #5'],

            // 'totalScore',
            ['requirement' => 100, 'category' => 'totalScore',
            'name' => 'totalScore #1', 'description' => 'totalScore desc #1'],
            ['requirement' => 200, 'category' => 'totalScore',
            'name' => 'totalScore #2', 'description' => 'totalScore desc #2'],
            ['requirement' => 400, 'category' => 'totalScore',
            'name' => 'totalScore #3', 'description' => 'totalScore desc #3'],
            ['requirement' => 800, 'category' => 'totalScore',
            'name' => 'totalScore #4', 'description' => 'totalScore desc #4'],
            ['requirement' => 9000, 'category' => 'totalScore',
            'name' => 'totalScore #5', 'description' => 'totalScore desc #5'],

            // 'accuracy',
            ['requirement' => 0, 'category' => 'accuracy',
            'name' => 'accuracy #1', 'description' => 'accuracy desc #1'],
            ['requirement' => 50, 'category' => 'accuracy',
            'name' => 'accuracy #2', 'description' => 'accuracy desc #2'],
            ['requirement' => 100, 'category' => 'accuracy',
            'name' => 'accuracy #3', 'description' => 'accuracy desc #3'],


            // 'perfectStreak',
            ['requirement' => 5, 'category' => 'perfectStreak',
            'name' => 'perfectStreak #1', 'description' => 'perfectStreak desc #1'],
            ['requirement' => 10, 'category' => 'perfectStreak',
            'name' => 'perfectStreak #2', 'description' => 'perfectStreak desc #2'],
            ['requirement' => 20, 'category' => 'perfectStreak',
            'name' => 'perfectStreak #3', 'description' => 'perfectStreak desc #3'],
            ['requirement' => 50, 'category' => 'perfectStreak',
            'name' => 'perfectStreak #4', 'description' => 'perfectStreak desc #4'],
            ['requirement' => 100, 'category' => 'perfectStreak',
            'name' => 'perfectStreak #5', 'description' => 'perfectStreak desc #5'],

            // 'correctItems'
            ['requirement' => 1, 'category' => 'correctItems',
            'name' => 'correctItems #1', 'description' => 'correctItems desc #1'],
        ];
        Goal::insert($goals);
    }
}
