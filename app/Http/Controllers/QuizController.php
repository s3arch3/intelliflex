<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use PDO;

class QuizController extends Controller
{
    public function take($id)
    {
        return view('quizzes.take', ['quizID' => $id]);
    }

    public function log($id)
    {
        // // Answers with alphabetical choice
        // $choice = collect(['A', 'B', 'C', 'D']);

        // //Get quiz summary record for the given quiz
        // $userQuizDetails = QuizHeader::where('id', $id)
        //     ->with('section')->first();

        // //Extract question taken by the users stored as a serialized string while takeing the quiz
        // $quizQuestionsList = collect(unserialize($userQuizDetails->questions_taken));

        // //Get the actual quiz questiona and answers from Quiz table using quiz_header_id
        // $userQuiz = Quiz::where('quiz_header_id', $userQuizDetails->id)
        //     ->orderBy('question_id', 'ASC')->get();
        // //dd($userQuiz);
        // //Get the Questions and related answers taken by the user during the quiz
        // $quizQuestions = Question::whereIn('id', $quizQuestionsList)->orderBy('id', 'ASC')->with('answers')->get();

        // //pass the data using compact to the view to display
        // return view(
        //     'appusers.userQuizDetail',
        //     compact(
        //         'userQuizDetails',
        //         'quizQuestionsList',
        //         'userQuiz',
        //         'quizQuestions',
        //         'choice'
        //     )
        // );
        return view('quizzes.log', ['quizLogID' => $id]);
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
