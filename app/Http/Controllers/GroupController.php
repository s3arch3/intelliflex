<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class GroupController extends Controller
{
    // this function is for students joining a class
    public function join(Request $request)
    {
        return view('groups.join', ['groupCode' => $request->groupCode]);
    }

    public function confirmJoin(Request $request)
    {

        // get all groups
        $groups = Group::all();
        // get all groupMembers (to be checked for duplication late below)
        $groupMembers = GroupMember::all();

        // normal index function
        $userType = Auth::user()->user_type;

        foreach ($groups as $group) {
            // if there is one code match, then check first if there are existing entiries for
            // duplicates (user_id and group_id)
            // find duplicates
            foreach ($groupMembers as $groupMember)
            {
                if ((Auth::user()->id === $groupMember->user_id) && ($group->id === $groupMember->group_id))
                {
                    return App::call('App\Http\Controllers\GroupController@index');
                }
            }

            if ($group->code == $request->groupCode) {
                // add entry to group_list database
                $groupMemberItem = Auth::user()->groupMembers()->create([
                    'user_id' => Auth::user()->id,
                    'group_id' => $group->id
                ]);
                break;
            }
        }
        return App::call('App\Http\Controllers\GroupController@index');
    }

    public function index()
    {
        $groups = Auth::user()->groups()->get();
        $groupMembers = Auth::user()->groupMembers()->get();
        $userType = Auth::user()->user_type;
        return view('groups.index', [
            'groups' => $groups,
            'groupMembers' => $groupMembers,
            'userType' => $userType
        ]);
    }

    public function create()
    {
        $groups = Group::all(); // get groups entries
        $groupCode = null; // generates random code
        $collision = true; // initiate initial state
        while ($collision == true) {
            $groupCode = Str::random(config('constants.group_code_length')); // generate first code, if on the second loop, then regerenate
            // if there are no group entries
            // erorrs when groupCode = null initial value + compared with group code no entry = null = true
            if ($groups->count() == 0) {
                break;
            }
            // loop thru all entires in groups table and do a comparison
            foreach ($groups as $group) {
                if ($group->code == $groupCode) {
                    // collision found
                    $collision = true;
                    // break out of the loop to find collisions again
                    break;
                } else {
                    $collision = false;
                    // generated code is != current code in loop
                }
            }
        }

        return view('groups.create', ['groupCode' => $groupCode]);
    }

    public function store(Request $request)
    {
        // insert quiz
        $groupItem = Auth::user()->groups()->create([
            'code' => $request->group['code'],
            'name' => $request->group['name'],
            'description' => $request->group['description'],
            'is_active' => array_key_exists('is_active', $request->group) ? '1' : '0', // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);
        return back();
    }

    public function show($id)
    {
        $groupItem = Group::findOrFail($id); // get that group item
        $userType = Auth::user()->user_type; // get current user_type
        $groupMembers = GroupMember::where('group_id', $id)->with('user')->get();
        $users = User::all();

        return view('groups.show', [
            'groupItem' => $groupItem,
            'userType' => $userType,
            'groupMembers' => $groupMembers,
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $groupItem = Group::findOrFail($id); // get that group item
        $groupMembers = GroupMember::where('group_id', $id)->with('user')->get();
        $users = User::all();

        return view('groups.edit', [
            'groupItem' => $groupItem,
            'groupMembers' => $groupMembers,
            'users' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = Group::where('id', $id)->update([
            'name' => $request->group['name'],
            'description' => $request->group['description'],
            'is_active' => array_key_exists('is_active', $request->group) ? '1' : '0' // array_key_exists because is_active key is passed if the checkbox is checked only
        ]);
        return back();
    }

    public function destroy($id)
    {
        Group::destroy($id);
        return back();
    }

    public function removeMember($id)
    {
        GroupMember::destroy($id);
        return back();
    }

    public function leaveGroup(Request $request)
    {
        // $group = Group::find($request->id);
        // $groupMembers = $group->groupMembers()->where('user_id', Auth::user()->id)->first();
        // $groupMemberDelete = GroupMember::findOrFail($groupMembers);
        // $groupMemberDelete->delete();
        // return App::call('App\Http\Controllers\GroupController@index');
    }
}
