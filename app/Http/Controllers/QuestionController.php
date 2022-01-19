<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $quizID = $request->input('quizID', 0); // get parameter from quiz details, add question button
        return view('questions.create', ['quizID' => $quizID]);
    }

    public function store(Request $request)
    {
        //user id
        $userID = Auth::user()->id;

        //quiz id
        $quizID = $request->input('quizID');

        // initiate isActive value
        $isActive = 0;

        if ($request->input('isActive') === 'on') {
            $isActive = 1;
        } else {
            $isActive = 0;
        }

        // create a question item array to be stored
        $newQuestionItem = new Question();

        $newQuestionItem->user_id = $userID;
        $newQuestionItem->quiz_id = $quizID;
        $newQuestionItem->is_active = $isActive;
        $newQuestionItem->question = $request->input('question');
        $newQuestionItem->explanation = $request->input('explanation');

        // save question
        $newQuestionItem->save();

        ////////////////////////////////////
        // answer creation part

        // initiate isActive value
        $isCheckedA = 0; // 0 is wrong and 1 is right
        $isCheckedB = 0; // 0 is wrong and 1 is right
        $isCheckedC = 0; // 0 is wrong and 1 is right
        $isCheckedD = 0; // 0 is wrong and 1 is right

        switch($request->input('selectedAnswer')){
            case ('letterA'):
                $isCheckedA = 1;
            break;

            case ('letterB'):
                $isCheckedB = 1;
            break;

            case ('letterC'):
                $isCheckedC = 1;
            break;

            case ('letterD'):
                $isCheckedD = 1;
            break;

            default:
            break;
        }

        // requestA and check their is_checked value

        $answerItemA = new Answer(); // instantiate an Answer model first
        $answerItemB = new Answer(); // instantiate an Answer model first
        $answerItemC = new Answer(); // instantiate an Answer model first
        $answerItemD = new Answer(); // instantiate an Answer model first

        $answerItemA->user_id = $userID;
        $answerItemB->user_id = $userID;
        $answerItemC->user_id = $userID;
        $answerItemD->user_id = $userID;

        $answerItemA->question_id = $newQuestionItem->id; // id can be accessed on newQuestionItem because save() is already called above.
        $answerItemB->question_id = $newQuestionItem->id; // id can be accessed on newQuestionItem because save() is already called above.
        $answerItemC->question_id = $newQuestionItem->id; // id can be accessed on newQuestionItem because save() is already called above.
        $answerItemD->question_id = $newQuestionItem->id; // id can be accessed on newQuestionItem because save() is already called above.

        $answerItemA->answer = $request->input('answerA');
        $answerItemB->answer = $request->input('answerB');
        $answerItemC->answer = $request->input('answerC');
        $answerItemD->answer = $request->input('answerD');

        $answerItemA->explanation = $request->input('explanationA');
        $answerItemB->explanation = $request->input('explanationB');
        $answerItemC->explanation = $request->input('explanationC');
        $answerItemD->explanation = $request->input('explanationD');

        $answerItemA->is_checked = $isCheckedA;
        $answerItemB->is_checked = $isCheckedB;
        $answerItemC->is_checked = $isCheckedC;
        $answerItemD->is_checked = $isCheckedD;

        $answerItemA->save();
        $answerItemB->save();
        $answerItemC->save();
        $answerItemD->save();

        return back(); // refresh
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
