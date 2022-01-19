<?php

namespace App\View\Components;

use Illuminate\View\Component;

class QuestionListItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    //question details
    public $questionNumber; //for the loop in the quizzes/show be passed here
    public $userID;
    public $quizID;
    public $isActive;
    public $question;
    public $explanationQuestion;

    //answer details
    public $answerA;
    public $answerB;
    public $answerC;
    public $answerD;

    public $explanationAnswerA;
    public $explanationAnswerB;
    public $explanationAnswerC;
    public $explanationAnswerD;

    public $isCheckedA;
    public $isCheckedB;
    public $isCheckedC;
    public $isCheckedD;

    public function __construct(
        $questionNumber = "",
        $userID = "",
        $quizID = "",
        $isActive = "",
        $question = "",
        $explanationQuestion = "",
        $answerA = "",
        $answerB = "",
        $answerC = "",
        $answerD = "",
        $explanationAnswerA = "",
        $explanationAnswerB = "",
        $explanationAnswerC = "",
        $explanationAnswerD = "",
        $isCheckedA = "",
        $isCheckedB = "",
        $isCheckedC = "",
        $isCheckedD = ""
    ) {
        $this->questionNumber = $questionNumber; //
        $this->userID = $userID;
        $this->quizID = $quizID;
        $this->isActive = $isActive; //
        $this->question = $question; //
        $this->explanationQuestion = $explanationQuestion; //

        $this->answerA = $answerA;
        $this->answerB = $answerB;
        $this->answerC = $answerC;
        $this->answerD = $answerD;

        $this->explanationAnswerA = $explanationAnswerA;
        $this->explanationAnswerB = $explanationAnswerB;
        $this->explanationAnswerC = $explanationAnswerC;
        $this->explanationAnswerD = $explanationAnswerD;

        $this->isCheckedA = $isCheckedA;
        $this->isCheckedB = $isCheckedB;
        $this->isCheckedC = $isCheckedC;
        $this->isCheckedD = $isCheckedD;
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
