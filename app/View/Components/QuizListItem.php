<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuizListItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $description;
    public $times_completed;
    public $is_active;
    public $id;

    public function __construct($name="", $description="", $timesCompleted="", $isActive="", $id="")
    {

        $this->name = $name;
        $this->description = $description;
        $this->times_completed = $timesCompleted;
        $this->is_active = $isActive;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.quiz-list-item');
    }
}
