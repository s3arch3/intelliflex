<?php

namespace App\Http\Controllers;

use App\Models\QuizLog;

class HomeController extends Controller
{
    public function home()
    {
        $quizLogs = QuizLog::all(); // get all quizLogs with quiz data
        return view('home', ['quizLogs' => $quizLogs]);
    }
}
