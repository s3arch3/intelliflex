<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizLog;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $quizLogs = QuizLog::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get(); // get all quizLogs
        $quizCount = Quiz::where('user_id', Auth::user()->id)->count();
        $overallAccuracy = $this->computeTotalAccuracy();
        $totalQuestionsAnswered = QuizLog::where('user_id', Auth::user()->id)->sum('number_of_questions');
        $totalPoints = QuizLog::where('user_id', Auth::user()->id)->sum('score');
        $loginStreak = '';
        return view('home', [
            'quizLogs' => $quizLogs,
            'quizCount' => $quizCount,
            'overallAccuracy' => $overallAccuracy,
            'totalQuestionsAnswered' => $totalQuestionsAnswered,
            'totalPoints' => $totalPoints
        ]);
    }

    public function computeTotalAccuracy()
    {
        // algo
        // - access all quizzes taken by the user
        // - get all user quizzes' total questions and store it as totalUserQuestions
        // - get all user quizzes' score and store it as totalUserScore
        // - divide and round off to 2 decimal places
        $quizLogs = QuizLog::where('user_id', Auth::user()->id);
        $totalUserQuestions = $quizLogs->sum('number_of_questions');
        $totalUserScore = $quizLogs->sum('score');
        try {
            return round(($totalUserScore / $totalUserQuestions) * 100, 2);
        } catch (\Throwable $th) {
            return 0;
        }
    }
}
