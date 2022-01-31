<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\QuizGoal;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all goals in a list for display muna
        $goals = Goal::all();
        return view('goals.index', ['goals' => $goals]);
    }

    public function setGoal($id)
    {
        // insert all goals on this quiz
        $goals = Goal::all(); // get all available goals
        // foreach goal that is existing, add that goal into the quiz for checking later after the user finishes the quiz for acheivement checking
        foreach ($goals as $goal)
        {
            $quizGoal = QuizGoal::where('quiz_id', $id)->create([
                'user_id' => Auth::user()->id,
                'quiz_id' => $id,
                'goal_id' => $goal->id,
                'is_achieved' => '0',
                'progress' => 0,
                'date_achieved' => NULL
            ]);
        }
    }
    public function checkGoal(Array $quizData)
    {
        // check the progress of a quiz's goals
        $quizID = $quizData['quizID']; // quiz ID as passed from livewire
        $goals = Goal::all(); // all initial seven goals
        // dd($quizID);

        // if $quizGoalPresent is NULL, then call setGoal()
        $quizGoalPresent = QuizGoal::where('quiz_id', $quizID)->exists();
        // if there are no quizgoal for this particular quiz, then create some
        if ($quizGoalPresent == false)
        {
            dd('there are no quiz goals records in this quiz, adding them now');
            $this->setGoal($quizID);
        }

        $this->checkGoalDejavu([
            'goalID' => 1,
            'quizID' => $quizID
        ]);

        // // It's Over Nine Thousand!
        // - Obtain a total amount of quiz points above 9000.
        // > if user.all quiz_log.score = 9000

        // // Wanderer's Advice
        // - Complete this quiz 10 times.
        // > if user. all quizzes count = 10 with different id's
        // > count quiz ids and store them in the stuff

        // // Adventurer's Experience
        // - Complete this quiz 25 times.

        // // Hero's Wits
        // - Complete this quiz 50 times.

        // // Ace!
        // - Obtain perfect scores in a quiz five times in a row.
        // > every perfect on that quiz add 1, when reached to 5 add that badge there

        // Near Miss
        // - Obtain one mistake in this quiz.
        // > if user.score = (total-1/total)
        // > or if user mistake = 1
    }


    public function checkGoalDejavu(Array $quizData){
        $quizID = $quizData['quizID']; // quiz ID as passed from checkgoal
        $goalID = $quizData['goalID']; // quiz ID as passed from checkgoal

        $goalRequirement = Goal::findOrFail($goalID)->requirement;
        $quizItem = Quiz::findOrFail($quizID);
        // if times_completed == 2
        if ($quizItem->times_completed == $goalRequirement)
        {
            // basically update the is_achieved of dejavu which is goal_id of 1 and on that quiz_id only
            $quizGoalUpdate = QuizGoal
                ::where('user_id', Auth::user()->id)
                ->where('goal_id', $goalID)
                ->where('quiz_id', $quizID)
                ->update(['is_achieved' => '1']);
        }
    }














    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
