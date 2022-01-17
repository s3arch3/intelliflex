<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $quizzes = Quiz::all();
        return view('quizzes.index', ['quizzes' => $quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        info($request->input('isActive'));

        // evaluate isActive
        $isActive = 0;

        if ($request->input('isActive') === 'on'){
            $isActive = 1;
        }else{
            // isActive still 0
        }

        $newQuiz = [
            'quiz_name' => $request->input('quizName', 'default'),
            'quiz_description' => $request->input('quizDesc', 'default'),
            'is_active' => $isActive,
            'times_completed' => '0' // default value for new quizzes
        ];

        Quiz::create($newQuiz);

        return back()->with('success', 'Your form has been submitted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $quizItem = Quiz::findOrFail($id);
        return view('quizzes.show', ['quizItem' => $quizItem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quizItem = Quiz::findOrFail($id);
        return view('quizzes.edit', ['quizItem' => $quizItem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $quizItem = Quiz::findOrFail($id); // get the entry first

        // evaluate isActive
        $isActive = 0;

        if ($request->input('isActive') === 'on'){
            $isActive = 1;
        }else{
            // isActive still 0
        }

        $quizItem->quiz_name = $request->input('quizName', 'default'); // modify name
        $quizItem->quiz_description = $request->input('quizDesc', 'default');  // modify desc
        $quizItem->is_active = $isActive;  // modify active state

        $quizItem->save(); // save all modifications

        return view('quizzes.edit', ['quizItem' => $quizItem]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete function
        // $quizItem = Quiz::findOrFail($id); // get particular id
        // $quizItem->delete();
        Quiz::destroy($id);

        return redirect()->route('quizzes.index');
        // $quizzes = Quiz::all();
        // return view('quizzes.index', ['quizzes' => $quizzes]);
        // return back()->with('delet success', 'quiz item has been destroyed!!!!!!!!.'); // list all
    }
}
