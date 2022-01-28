<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\Question;

class QuizLivewire extends Component
{

    public $quizID; // the id of the selected quiz ex. 1, 2, 3, so on...
    public $quizItem; // contains the name, and description ^_^
    public $questionsCount; // (quizSize) counts the $quizItem based on model relationship access on mount
    public $isDisabled = true;

    public $count = 0; // increments as the user proceeds on the next question, is also an indicator of current question number.
    public $currentQuestion; // this is a Question item which holds the current question data being displayed on the screen
    public $answeredQuestions = []; // this is an array containing all the ID of the answered questions.
    public $userAnswered = []; // value property ex. 3,1 (answer_id, is_checked) 3 is the answer id and 1 is checked (0 is not). array which is tied to the choices loop in quiz-livewire.blade.php, changes values depending on what's selected (answer_id, is_checked)

    public $quizInStart = true; // if true, start div will be visible in quiz-livewire.blade.php. Initially set to true to show the start page first
    public $quizInProgress = false;  // if true, question div will be visible in quiz-livewire.blade.php
    public $quizInEnd = false; // if true, end div will be visible in quiz-livewire.blade.php


    // mount is to manually attach the parameters passed when the livewire component is called
    // same as __construct to blade components
    // for prepping the data before the quiz starts
    public function mount($quizID)
    {
        // mount is called to mount quizID to this quizID
        $this->quizID = $quizID; // just to make sure
        $this->quizItem = Quiz::findOrFail($quizID); // find the quiz using the id passed to this livewire component
        $this->questionsCount =  $this->quizItem->questions()->count(); // get all questions under that quiz
    }

    // this function is fired when the user clicks "Start Quiz" on quiz-livewire.blade.php
    public function startQuiz()
    {
        // A. hide start and end div, show question div
        $this->quizInStart = false;
        $this->quizInProgress = true;
        $this->quizInEnd = false;

        // B. create a quizLog item
        // C. start the count from 1
        $this->count = 1;
        // D. get the first question related to this quiz
        $this->currentQuestion = $this->getNextQuestion();
    }

    // the purpose of this function is to acquire the next question on the selected quiz
    public function getNextQuestion()
    {
        // A. create a question instance with the following chains to achieve desired option
        // where = matches only the id for this quiz to the questions table
        // whereNotIn = finds Question item but checks the id column and discards all things inside the answeredQuestions array
        // with('answers') = answers is a function inside the Question model and basically returns all answer items tied to this question
        // inRandomOrder = gets all the qualified entries and randomizes that list
        // first = simply means get the first entry on that randomized list
        $question = Question::where('quiz_id', $this->quizID)
            ->whereNotIn('id', $this->answeredQuestions)
            ->with('answers')
            ->inRandomOrder()
            ->first();

        // B. if the question item above is null, might as well end the quiz, right?
        if ($question === null) {
            // code here later to end the quiz and finalize stuff
        }

        // C. add this question's id to the answeredQuestions array so that it will be excluded later on
        array_push($this->answeredQuestions, $question->id);
        // D. return that question item
        return $question;
    }

    // when the user clicks "Next Question" on quiz-livewire.blade.php
    public function nextQuestion()
    {

    }



    public function render()
    {
        return view('livewire.quiz-livewire');
    }
}
