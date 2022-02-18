<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupListItem extends Component
{
    public $userType;
    public $name;
    public $description;
    public $code;
    public $isActive;
    public $groupProfessorID;
    public $groupStudentID;


    public function __construct($userType="", $name="", $description="", $code="", $isActive="", $groupProfessorID="", $groupStudentID="")
    {
        $this->userType = $userType;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
        $this->isActive = $isActive;
        $this->groupProfessorID = $groupProfessorID;
        $this->groupStudentID = $groupStudentID;
    }

    public function render()
    {
        return view('components.group-list-item');
    }
}
