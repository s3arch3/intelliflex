<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{

    public function index()
    {
        $userID = Auth::user()->id;
        $quizzes = Quiz::where('user_id', $userID)->orderBy('name')->get();
        return view('quizzes.index', ['quizzes' => $quizzes]);
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        //user id
        $userID = Auth::user()->id;

        // initiate isActive value
        $isActive = 0;

        if ($request->input('isActive') === 'on'){
            $isActive = 1;
        }else{
            $isActive = 0;
        }

        // create a quiz item array to be stored
        $newQuizItem = [
            'user_id' => $userID,
            'name' => $request->input('name'),
            'description' => $request->input('quizDesc'),
            'is_active' => $isActive,
            'times_completed' => '0' // default value for new quizzes
        ];

        // on this line
        Quiz::create($newQuizItem);

        return back(); // refresh
    }

    public function show($id)
    {
        $quizItem = Quiz::findOrFail($id);
        return view('quizzes.show', ['quizItem' => $quizItem]);
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

        return back();
    }
}
