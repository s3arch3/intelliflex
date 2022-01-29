<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuizLogItem extends Component
{
    public $id;
    public $name;
    public $description;
    public $questionsCount;
    public $isCompleted;
    public $score;

    public function __construct($name="", $description="", $id="", $questionsCount="", $isCompleted="", $score="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->questionsCount = $questionsCount;
        $this->isCompleted = $isCompleted;
        $this->score = $score;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.quiz-log-item');
    }
}
