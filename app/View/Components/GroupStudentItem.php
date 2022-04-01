<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\QuizLog;

class GroupStudentItem extends Component
{
    public $myID;
    public $groupProfessorID;
    public $studentIDinGroup;
    public $studentIDinUser;
    public $name;
    public $totalQuizPoints;
    public $userType;

    public function __construct(
        $myID = "",
        $groupProfessorID = "",
        $studentIDinGroup = "",
        $studentIDinUser = "",
        $name = "",
        $totalQuizPoints = "",
        $userType = "",
    )
    {
        $this->myID = $myID;
        $this->groupProfessorID = $groupProfessorID;
        $this->studentIDinGroup = $studentIDinGroup;
        $this->studentIDinUser = $studentIDinUser;
        $this->name = $name;
        $this->totalQuizPoints = $totalQuizPoints;
        $this->userType = $userType;
        $this->totalQuizPoints = QuizLog::where('group_professor_id', $groupProfessorID)
        ->where('user_id', $studentIDinUser)
        ->sum('score');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.group-student-item');
    }
}
