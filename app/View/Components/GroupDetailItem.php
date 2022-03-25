<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupDetailItem extends Component
{
    public $groupID;
    public $groupName;
    public $groupDescription;
    public $groupCode;
    public $isActive;
    public $totalGroupPoints;
    public $professorName;
    public $numberOfStudents;

    public function __construct(
        $groupID="",
        $groupName="",
        $groupDescription="",
        $groupCode="",
        $isActive="",
        $totalGroupPoints="",
        $professorName="",
        $numberOfStudents=""
    )
    {
        $this->groupID = $groupID;
        $this->groupName = $groupName;
        $this->groupDescription = $groupDescription;
        $this->groupCode = $groupCode;
        $this->isActive = $isActive;
        $this->totalGroupPoints = $totalGroupPoints;
        $this->professorName = $professorName;
        $this->numberOfStudents = $numberOfStudents;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.group-detail-item');
    }
}
