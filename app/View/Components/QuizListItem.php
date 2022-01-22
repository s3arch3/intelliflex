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
    public $timesCompleted;
    public $isActive;
    public $id;
    public $questionsCount;

    public function __construct($name="", $description="", $timesCompleted="", $isActive="", $id="", $questionsCount="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->isActive = $isActive;
        $this->timesCompleted = $timesCompleted;
        $this->questionsCount = $questionsCount;
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
