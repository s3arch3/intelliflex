<?php

namespace App\Http\Controllers;

use App\Models\GroupProfessor;
use App\Models\GroupStudent;
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

        return view('groups.show', [
            'groupProfessorItem' => $groupProfessorItem,
            'groupStudents' => $groupStudents,
            'userType' => $userType
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

}
