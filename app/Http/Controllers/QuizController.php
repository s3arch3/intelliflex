<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QuizController extends Controller
{
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
        // $questions = Question::where('quiz_id', $id)->orderBy('id')->get(); // get all questions related to this quiz item
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
        $quizItem = Quiz::findOrFail($id); // get the entry first

        // initiate isActive value
        $isActive = 0;

        if ($request->input('isActive') === 'on'){
            $isActive = 1;
        }else{
            $isActive = 0;
        }

        $quizItem->name = $request->input('name', 'default'); // modify name
        $quizItem->description = $request->input('quizDesc', 'default');  // modify desc
        $quizItem->is_active = $isActive;  // modify active state

        $quizItem->save(); // save all modifications

        return view('quizzes.edit', ['quizItem' => $quizItem]);
    }

    public function destroy($id)
    {
        Quiz::destroy($id);
        // $flight = Flight::find(1);

        // $flight->delete();
        return back();
    }
}
