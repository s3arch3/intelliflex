<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupGoalItem extends Component
{
    public $goalName;
    public $goalDescription;
    public $achieved;

    public function __construct($goalName="", $goalDescription="", $achieved="")
    {
        $this->goalName = $goalName;
        $this->goalDescription = $goalDescription;
        $this->achieved = $achieved;
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
