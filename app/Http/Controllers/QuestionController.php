<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        return view('questions.create', ['quizID' => $request->input('quizID')]);
    }

    public function store(Request $request)
    {
        $question = Auth::user()->questions()->create([
            'user_id' => Auth::user()->id,
            'quiz_id' => $request->input('quizID'),
            'question' => $request->question['question'],
            'explanation' => $request->question['explanation'],
            'is_active' => array_key_exists('is_active', $request->question) ? '1' : '0', // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);

        $answers = $question->answers()->createMany([
            ['user_id' => Auth::user()->id, 'question_id' => $question->id, 'answer' => $request->answers[0]['answer'], 'explanation' => $request->answers[0]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'A' ? '1' : '0'],
            ['user_id' => Auth::user()->id, 'question_id' => $question->id, 'answer' => $request->answers[1]['answer'], 'explanation' => $request->answers[1]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'B' ? '1' : '0'],
            ['user_id' => Auth::user()->id, 'question_id' => $question->id, 'answer' => $request->answers[2]['answer'], 'explanation' => $request->answers[2]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'C' ? '1' : '0'],
            ['user_id' => Auth::user()->id, 'question_id' => $question->id, 'answer' => $request->answers[3]['answer'], 'explanation' => $request->answers[3]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'D' ? '1' : '0']
        ]);

        return back();
    }

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
        $questionItem = Question::findOrFail($id);
        $answers = $questionItem->answers()->get();
        return view('questions.edit', ['questionItem' => $questionItem, 'answers' => $answers]);
    }

    public function update(Request $request, $id)
    {
        // $question = Auth::user()->questions()->where('id', $id)->update([

        $question = Question::where('id', $id)->update([
            'question' => $request->question['question'],
            'explanation' => $request->question['explanation'],
            'is_active' => array_key_exists('is_active', $request->question) ? '1' : '0', // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);

        $answers = $question->answers()->where('question_id', $question->id)->get();

        $i = 0;
        foreach ($answers as $answer){
            $answer->update(['answer' => $request->answers[$i]['answer'], 'explanation' => $request->answers[$i]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'A' ? '1' : '0']);
            $i++;
        }
        //     ['answer' => $request->answers[1]['answer'], 'explanation' => $request->answers[1]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'B' ? '1' : '0'],
        //     ['answer' => $request->answers[2]['answer'], 'explanation' => $request->answers[2]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'C' ? '1' : '0'],
        //     ['answer' => $request->answers[3]['answer'], 'explanation' => $request->answers[3]['explanation'], 'is_checked' => isset($request->question['is_selected']) && $request->question['is_selected'] === 'D' ? '1' : '0']
        // ]);

        return back();
        // $answers = $question->answers()->where('question_id', $question->id)->update([
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
