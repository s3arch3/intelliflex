<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;

class QuizLivewire extends Component
{

    public $quizID; // the id of the quiz ex. 1, 2, 3, so on...
    public $quizItem; // contains the name, and description ^_^
    public $questionsCount; // counts the $quizItem based on model relationship access on mount


    public $quizInStart = false;
    public $quizInProgress = false;
    public $quizInEnd = true;


    // mount is to manually attach the parameters passed when the livewire component is called
    // same as __construct to blade components
    public function mount($quizID){
        // mount is called to mount quizID to this quizID
        $this->quizID = $quizID; // just to make sure
        $this->quizItem = Quiz::findOrFail($quizID); // find the quiz using the id passed to this livewire component
        $this->questionsCount =  $this->quizItem->questions()->count(); // get all questions under that quiz
    }


    public function render()
    {
        return view('livewire.quiz-livewire');
    }
}
