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
    public $quiz_name;
    public $quiz_description;
    public $times_completed;

    public function __construct($quizName="", $quizDescription="", $timesCompleted="")
    {
        //
        // $this->quiz_name = $quiz_name;
        // $this->quiz_desc = $quiz_description;
        // $this->times_completed = $times_completed;
        //
        $this->quiz_name = $quizName;
        $this->quiz_description = $quizDescription;
        $this->times_completed = $timesCompleted;
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
