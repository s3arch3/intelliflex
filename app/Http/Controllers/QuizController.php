<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use App\Models\QuizLog;
use App\Models\Question;
use App\Models\QuizGoal;
use App\Models\QuizLogItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function take($id, Request $request)
    {
        // if $quizGoalPresent is NULL, then call setGoal()
        $quizGoalPresent = QuizGoal::where('quiz_id', $id)->exists();
        // if there are no quizgoal for this particular quiz, then create some
        if ($quizGoalPresent == false)
        {
            // there are no quiz goals records in this quiz, adding them now
            app('App\Http\Controllers\GoalController')->setGoal($id);
        }
        // also pass the groupProfessorID groupQuizID here
        return view('quizzes.take', [
        'quizID' => $id,
        'groupProfessorID' => $request->groupProfessorID,
        'groupQuizID' => $request->groupQuizID
        ]);
    }

    public function log($id)
    {
        // Choices to be passed on log page
        $choice = collect(['A', 'B', 'C', 'D']);

        // get the quiz log for that quiz ID
        $quizLog = QuizLog::where('id', $id)
            ->with('quiz')->first();

        // get the order of questions taken under the quizLog and unserialize and put it in the collection
        // for reference when getting the questions below
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
        $user = User::findOrFail(Auth::user()->id);
        $quizzes = $user->quizzes()->withCount('questions')->paginate(100);
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        // insert quiz
        $user = User::findOrFail(Auth::user()->id);
        $quizItem =$user->quizzes()->create([
            'name' => $request->quiz['name'],
            'description' => $request->quiz['description'],
            'is_active' => array_key_exists('is_active', $request->quiz) ? '1' : '0', // array_key_exists because is_active key is passed if the checkbox is checked only
            'times_completed' => 0,
        ]);
        app('App\Http\Controllers\GoalController')->setGoal($quizItem->id);
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
