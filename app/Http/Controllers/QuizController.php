<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizLog;
use Illuminate\Support\Facades\Auth;
use App\Models\QuizLogItem;
use App\Models\Question;
use PDO;

class QuizController extends Controller
{
    public function take($id)
    {
        return view('quizzes.take', ['quizID' => $id]);
    }

    public function log($id)
    {
        // Choices to be passed on log page
        $choice = collect(['A', 'B', 'C', 'D']);

        // get the quiz log for that quiz ID
        $quizLog = QuizLog::where('id', $id)
            ->with('quiz')->first();

        // get the order of questions taken under the quizLog and unserialize and put it in the collection
        $quizLogQuestionsTaken = collect(unserialize($quizLog->questions_taken));

        // get the selected answers by the user for that quiz (all the choices he made, even if it's right or wrong)
        $quizLogItems = QuizLogItem::where('quiz_log_id', $quizLog->id)
            ->orderBy('question_id', 'ASC')->get();

        // get the questions and related answers taken by the user during the quiz
        $quizQuestions = Question::whereIn('id', $quizLogQuestionsTaken)->orderBy('id', 'ASC')->with('answers')->get();

        return view('quizzes.log',[
            'quizLogID' => $id,
            'choice' => $choice,
            'quizLog' => $quizLog,
            'quizLogQuestionsTaken' => $quizLogQuestionsTaken,
            'quizLogItems' => $quizLogItems,
            'quizQuestions' => $quizQuestions,

        ]);
    }

    public function index()
    {
        $quizzes = Quiz::withCount('questions')->paginate(100);
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        $quizItem = Auth::user()->quizzes()->create([
            'name' => $request->quiz['name'],
            'description' => $request->quiz['description'],
            'is_active' => array_key_exists('is_active', $request->quiz) ? '1' : '0', // array_key_exists because is_active key is passed if the checkbox is checked only
            'times_completed' => 0,
        ]);
        return back();
    }

    public function show($id)
    {
        $quizItem = Quiz::findOrFail($id); // get that quiz item
        $questions = $quizItem->questions()->paginate(100);
        return view('quizzes.show', ['quizItem' => $quizItem, 'questions' => $questions]);
    }

    public function edit($id)
    {
        $quizItem = Quiz::findOrFail($id);
        return view('quizzes.edit', ['quizItem' => $quizItem]);
    }

    public function update(Request $request, $id)
    {
        $user = Quiz::where('id', $id)->update([
            'name' => $request->quiz['name'],
            'description' => $request->quiz['description'],
            'is_active' => array_key_exists('is_active', $request->quiz) ? '1' : '0' // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);
        return back();
    }

    public function destroy($id)
    {
        Quiz::destroy($id);
        return back();
    }
}
