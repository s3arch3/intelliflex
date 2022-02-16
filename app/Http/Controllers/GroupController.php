<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Auth::user()->groups()->get();
        return view('groups.index', compact('groups'));
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
            if ($groups->count() == 0)
            {
                break;
            }
            // loop thru all entires in groups table and do a comparison
            foreach ($groups as $group) {
                if ($group->code == $groupCode)
                {
                    // collision found
                    $collision = true;
                    // break out of the loop to find collisions again
                    break;
                }
                else
                {
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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Group::destroy($id);
        return back();
    }
}
