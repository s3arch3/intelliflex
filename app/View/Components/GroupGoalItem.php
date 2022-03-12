<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupGoalItem extends Component
{
    public $goalName;
    public $goalDescription;

    public function __construct($goalName="", $goalDescription="")
    {
        $this->goalName = $goalName;
        $this->goalDescription = $goalDescription;
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
