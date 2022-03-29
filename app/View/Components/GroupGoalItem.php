<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupGoalItem extends Component
{
    public $goalName;
    public $goalDescription;
    public $achieved;
    public $totalGroupPoints;
    public $goal;

    public function __construct($goalName="", $goalDescription="", $achieved="", $totalGroupPoints="", $goal="")
    {
        $this->goalName = $goalName;
        $this->goalDescription = $goalDescription;
        $this->achieved = $achieved;
        $this->totalGroupPoints = $totalGroupPoints;
        $this->goal = $goal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.group-goal-item');
    }
}
