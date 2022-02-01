<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\QuizGoal;
use App\Models\Quiz;
use App\Models\QuizLog;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    public function index()
    {
        // get all goals in a list for display muna
        $goals = Goal::all();
        return view('goals.index', ['goals' => $goals]);
    }

    // adds quiz goal entries for each quiz created
    public function setGoal($id)
    {
        // insert all goals on this quiz
        $goals = Goal::all(); // get all available goals
        // foreach goal that is existing, add that goal into the quiz for checking later after the user finishes the quiz for acheivement checking
        foreach ($goals as $goal) {
            $quizGoal = QuizGoal::where('quiz_id', $id)->create([
                'user_id' => Auth::user()->id,
                'quiz_id' => $id,
                'goal_id' => $goal->id,
                'is_achieved' => '0',
                'progress' => 0,
                'date_achieved' => NULL
            ]);
        }
    }
    // calls all goalcheckers
    // DONT INTERRUPT LIVEWIRE
    public function checkGoal(array $quizData)
    {
        // check the progress of a quiz's goals
        $quizID = $quizData['quizID']; // quiz ID as passed from livewire

        // GOAL CATEGORY ENUM
        // 'timesCompleted'
        // 'totalScore'
        // 'accuracy'
        // 'perfectStreak'
        // 'correctItems'
        $this->checkGoalTimesCompleted(['quizID' => $quizID]);
        $this->checkGoalTotalScore(['quizID' => $quizID]);
        $this->checkGoalAccuracy(['quizID' => $quizID]);
        // other 4 functions here
    }

    public function checkGoalAccuracy(array $quizData)
    {
        $quizID = $quizData['quizID']; // quiz ID as passed from checkGoal
        $quizItem = Quiz::findOrFail($quizID); // the quiz item
        $goals = Goal::where('category', 'accuracy')->get(); // get all goals
        // get the latest quizLog on this quiz
        $latestQuizLogOnThisQuiz = QuizLog
            ::where('user_id', Auth::user()->id)
            ->where('quiz_id', $quizID)
            ->orderBy('id', 'desc')
            ->first();
        $score = $latestQuizLogOnThisQuiz->score;
        $questionCount = $quizItem->questions()->count();
        $quizPercentage = round(($score / $questionCount) * 100, 0);

        // checking if total score >= goal requirement
        foreach ($goals as $goal) {
            if ($quizPercentage == $goal->requirement)
                $quizGoalUpdate = QuizGoal
                    ::where('user_id', Auth::user()->id)
                    ->where('goal_id', $goal->id)
                    ->where('quiz_id', $quizID)
                    ->update(['is_achieved' => '1', 'progress' => $quizPercentage]);
        }
    }

    public function checkGoalTotalScore(array $quizData)
    {
        $quizID = $quizData['quizID']; // quiz ID as passed from checkGoal
        $quizItem = Quiz::findOrFail($quizID); // the quiz item
        $goals = Goal::where('category', 'totalScore')->get(); // get all goals
        $totalScoreOfThisQuiz = QuizLog
            ::where('user_id', Auth::user()->id)
            ->where('quiz_id', $quizID)
            ->sum('score');

        // updating the progress for each quizGoalItem
        foreach ($goals as $goal) {
            $quizGoalsUpdate = QuizGoal
                ::where('user_id', Auth::user()->id)
                ->where('goal_id', $goal->id)
                ->where('quiz_id', $quizID)
                ->update(['progress' => $totalScoreOfThisQuiz]);
        }

        // checking if total score >= goal requirement
        foreach ($goals as $goal) {
            if ($totalScoreOfThisQuiz >= $goal->requirement)
                $quizGoalUpdate = QuizGoal
                    ::where('user_id', Auth::user()->id)
                    ->where('goal_id', $goal->id)
                    ->where('quiz_id', $quizID)
                    ->update(['is_achieved' => '1']);
        }
    }

    public function checkGoalTimesCompleted(array $quizData)
    {
        $quizID = $quizData['quizID']; // quiz ID as passed from checkGoal
        $quizItem = Quiz::findOrFail($quizID); // the quiz item
        $goals = Goal::where('category', 'timesCompleted')->get(); // get all goals
        $timesCompleted = $quizItem->times_completed;

        // updating the progress for each quizGoalItem
        foreach ($goals as $goal) {
            $quizGoalsUpdate = QuizGoal
                ::where('user_id', Auth::user()->id)
                ->where('goal_id', $goal->id)
                ->where('quiz_id', $quizID)
                ->update(['progress' => $quizItem->times_completed]);
        }

        // checking if times_completed == goal requirement
        foreach ($goals as $goal) {
            if ($timesCompleted == $goal->requirement)
                $quizGoalUpdate = QuizGoal
                    ::where('user_id', Auth::user()->id)
                    ->where('goal_id', $goal->id)
                    ->where('quiz_id', $quizID)
                    ->update(['is_achieved' => '1']);
        }
    }
}
