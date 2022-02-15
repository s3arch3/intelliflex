<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('groups.index');
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

    // this function is for generating a 7 character code for
    // joining to groups feature
    public function generateClassCode()
    {
        $classCode = String::random(8);
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
