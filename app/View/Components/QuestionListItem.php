<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuestionListItem extends Component
{
    /**
     * WARNING
     * ALL VARIABLES/PARAMETERS STRICTLY camelCase ONLY
     * ERRORS WHEN SNAKE CASE ON THE BLADE CALL
     */

    //question details
    public $index; //for the loop in the quizzes/show be passed here
    public $question;
    public $explanation;
    public $isActive;
    public $answers;

    public function __construct(
        $index = "",
        $question = "",
        $explanation = "",
        $isActive = "",
        $answers = ""
    ) {
        $this->index = $index;
        $this->question = $question;
        $this->explanation = $explanation;
        $this->isActive = $isActive;
        $this->answers = $answers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.question-list-item');
    }
}
