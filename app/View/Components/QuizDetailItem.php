<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuizDetailItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $quizName;
    public $quizDescription;
    public $isActive;

    public function __construct(
        $quizName = "",
        $quizDescription = "",
        $isActive = "",
    )
    {
        $this->quizName = $quizName;
        $this->quizDescription = $quizDescription;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.quiz-detail-item');
    }
}
