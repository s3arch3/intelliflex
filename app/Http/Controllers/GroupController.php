<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\GroupProfessor;
use App\Models\GroupStudent;
use App\Models\GroupQuiz;
use App\Models\Quiz;
use App\Models\QuizGoal;
use App\Models\QuizLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class GroupController extends Controller
{
    // This controller is divided to three sections:
    // 1. STUDENT AND PROFESSOR CONTROLLER
    // 2. PROFESSOR CONTROLLER
    // 3. STUDENT CONTROLLER

    // STUDENT AND PROFESSOR CONTROLLER
    // STUDENT AND PROFESSOR CONTROLLER
    // STUDENT AND PROFESSOR CONTROLLER
    public function index()
    {
        // get the user instance
        $user = User::findOrFail(Auth::user()->id);
        // for professor interface data at index
        $groupProfessors = $user->groupProfessors()->get();
        // for student interface data at index
        $groupStudents = $user->groupStudents()->get();
        // get the user_type whether 'student' or 'professor' or 'admin'
        $userType = $user->user_type;

        return view('groups.index', [
            'groupProfessors' => $groupProfessors,
            'groupStudents' => $groupStudents,
            'userType' => $userType
        ]);
    }

    public function show($id)
    {
        // get the user instance
        $user = User::findOrFail(Auth::user()->id);
        // get the user_type whether 'student' or 'professor' or 'admin'
        $userType = $user->user_type;
        $groupProfessorItem = GroupProfessor::findOrFail($id); // get that group item
        $groupStudents = GroupStudent::where('group_professor_id', $id)->with('user')->get();
        $groupStudentCount = GroupStudent::where('group_professor_id', $id)->count();
        $groupProfessorOwner = GroupProfessor::findOrFail($id)->user()->first()->name;

        // get all quizzes that the professor created for this group
        $groupQuizzes = GroupQuiz
            ::where('group_professor_id', $id)
            ->get();

        // sum of all the points earned in that group
        $totalGroupPoints = QuizLog::where('group_professor_id', $id)->sum('score');
        $quizGoals = QuizGoal::all();
        $goals = Goal::all();
        // get the top 3 scorers for each quiz in ascending order

        // access quiz_log
        // get entries that are only related
        // "group_professor_id", and "group_quiz_id"
        // $quizLogItems =  QuizLog::where('group_professor_id', $id)->with('user')->get();

        // 1 entry = user_id and score (sum of user_id score)

        return view('groups.show', [
            'groupProfessorItem' => $groupProfessorItem,
            'groupStudents' => $groupStudents,
            'userType' => $userType,
            'groupQuizzes' => $groupQuizzes,
            'userID' => $user->id,
            'totalGroupPoints' => $totalGroupPoints,
            'quizGoals' => $quizGoals,
            'goals' => $goals,
            'groupStudentCount' => $groupStudentCount,
            'groupProfessorOwner' => $groupProfessorOwner,
            // 'quizLogItems' => $quizLogItems,
        ]);
    }

    // PROFESSOR CONTROLLER
    // PROFESSOR CONTROLLER
    // PROFESSOR CONTROLLER

    public function create()
    {
        $groupProfessors = GroupProfessor::all(); // get all groups
        $groupCode = null; // null first
        $collision = true; // initiate initial state of collision

        while ($collision == true) {
            $groupCode = Str::random(config('constants.group_code_length')); // generate first code, if on the second loop, then regerenate

            // erorrs when groupCode = null initial value + compared with group code no entry = null = true
            // if there are no groups to compare with then break loop
            if ($groupProfessors->count() == 0) {
                break;
            }
            // loop thru all entires in groups table and do a comparison
            foreach ($groupProfessors as $groupProfessor) {
                if ($groupProfessor->code == $groupCode) {
                    // collision found
                    $collision = true;
                    // break out of the loop to find collisions again
                    break;
                } else {
                    $collision = false;
                    // if collision held false for the entire loop
                    // then exit on while loop
                    // generated code is != current code in loop
                }
            }
        }

        return view('groups.create', ['groupCode' => $groupCode]);
    }

    // for professors only
    public function store(Request $request)
    {
        // get the user instance
        $user = User::findOrFail(Auth::user()->id);
        // create the group
        $groupProfessorItem = $user->groupProfessors()->create([
            'code' => $request->group['code'],
            'name' => $request->group['name'],
            'description' => $request->group['description'],
            'is_active' => array_key_exists('is_active', $request->group) ? '1' : '0', // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);
        return App::call('App\Http\Controllers\GroupController@index');
    }

    public function edit($id)
    {
        $groupProfessorItem = GroupProfessor::findOrFail($id); // get that group item
        $groupStudents = GroupStudent::where('group_professor_id', $id)->with('user')->get();
        return view('groups.edit', [
            'groupProfessorItem' => $groupProfessorItem,
            'groupStudents' => $groupStudents
        ]);
    }

    public function update(Request $request, $id)
    {
        $groupProfessorItem = GroupProfessor::where('id', $id)->update([
            'name' => $request->group['name'],
            'description' => $request->group['description'],
            'is_active' => array_key_exists('is_active', $request->group) ? '1' : '0' // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);
        return App::call('App\Http\Controllers\GroupController@index');
    }

    public function destroy($id)
    {
        GroupProfessor::destroy($id);
        return App::call('App\Http\Controllers\GroupController@index');
    }




    // STUDENT CONTROLLER
    // STUDENT CONTROLLER
    // STUDENT CONTROLLER

    // this function is for students joining a class
    public function join(Request $request)
    {
        $groupCode = $request->groupCode;
        $groupProfessors = GroupProfessor::all(); // get all created groups
        $groupStudents = GroupStudent::all(); // get all students and their joined class


        if ($groupProfessors->count() != 0) {
            // run a scan if such group code exists within the group_professors table
            foreach ($groupProfessors as $key => $groupProfessor) {
                // checking if entered code == database entry code
                if ($groupProfessor->code === $groupCode) {
                    if ($groupStudents->count() != 0) {
                        // check for duplicates too in group_student (check if user had already joined)
                        foreach ($groupStudents as $groupStudent) {
                            if ((Auth::user()->id === $groupStudent->user_id && $groupProfessor->id === $groupStudent->group_professor_id)) {
                                return App::call('App\Http\Controllers\GroupController@index');
                            }
                        }
                    }
                    // just break the loop because a possible group code matches
                    return view('groups.join', [
                        'groupProfessorItem' => GroupProfessor::findOrFail($key + 1),
                        'studentCount' =>  GroupStudent::where('group_professor_id', $key + 1)->count()
                    ]);
                }
            }
        }
        // code will go here if above condition is not met
        // just go home
        return App::call('App\Http\Controllers\GroupController@index');
    }

    public function confirmJoin(Request $request)
    {

        // get the user instance
        $user = User::findOrFail(Auth::user()->id);

        // code will go here if above foreach duplicate check is good
        // add entry to group_list database
        $groupMemberItem = GroupStudent::create([
            'user_id' => $user->id,
            'group_professor_id' => $request->groupProfessorID
        ]);
        return App::call('App\Http\Controllers\GroupController@index');
    }

    public function removeStudent(Request $request)
    {
        // ALWAYS INSTANTIATE VARIABLE ON DESTROY METHOD???
        // ALWAYS INSTANTIATE VARIABLE ON DESTROY METHOD???
        // ALWAYS INSTANTIATE VARIABLE ON DESTROY METHOD???
        $delete = GroupStudent::destroy($request->groupStudentID);
        return App::call('App\Http\Controllers\GroupController@index');
    }

    public function addQuiz($id)
    {
        // get user instance
        $user = User::findOrFail(Auth::user()->id);

        $quizzes =$user->quizzes()->withCount('questions')->paginate(100);

        //? if a quiz is already selected, then don't show it anymore (modify query above)

        return view('groups.add', ['groupID' => $id, 'quizzes' => $quizzes]);
    }

    public function addQuizToGroup($quizID, $groupID)
    {

        // get the user instance
        $user = User::findOrFail(Auth::user()->id);

        // boolean initiator
        $quizInGroupAlreadyExists = false;
        // 1. get all quizzes instance
        $groupQuizzes = GroupQuiz::all();
        // 2. loop thru all the quizzes under the current group
        foreach ($groupQuizzes as $groupQuiz) {
            // 3. if there matches a quiz_id from groupquiz to the current quiz_id
            if ($groupQuiz->quiz_id == $quizID && $groupQuiz->group_professor_id == $groupID) {
                # code...
                $quizInGroupAlreadyExists = true;
                break;
            }
        }

        if ($quizInGroupAlreadyExists == true) {
            // 4. then there's a duplicate quiz, just do nothing
        } else {
            // 5. if not, then create an instance of groupQuizItem
            // create entry for group_quizzes
            $groupQuizItem = $user->groupQuiz()->create([
                'group_professor_id' => $groupID,
                'quiz_id' => $quizID,
            ]);
        }

        // call @show and pass the groupID parameter
        return App::call('App\Http\Controllers\GroupController@show', ['id' => $groupID]);
    }

    public function removeQuizToGroup($groupQuizID, Request $request){
        // ALWAYS INSTANTIATE VARIABLE ON DESTROY METHOD???
        // ALWAYS INSTANTIATE VARIABLE ON DESTROY METHOD???
        // ALWAYS INSTANTIATE VARIABLE ON DESTROY METHOD???
        $delete = GroupQuiz::destroy($groupQuizID);
        // return back();
        return App::call('App\Http\Controllers\GroupController@show', ['id' => $request->groupProfessorID]);

    }
}
