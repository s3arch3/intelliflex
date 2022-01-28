<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;

class QuizLivewire extends Component
{

    public $quizID; // the id of the quiz ex. 1, 2, 3, so on...
    public $quizItem; // contains the name, and description ^_^
    public $questionsCount; // counts the $quizItem based on model relationship access on mount


    public $quizInStart = true;
    public $quizInProgress = false;
    public $quizInEnd = false;

    public function mount($quizID){
        // mount is called to mount quizID to this quizID
        $this->quizID = $quizID; // just to make sure
        $this->quizItem = Quiz::findOrFail($quizID);
        $this->questionsCount =  $this->quizItem->questions()->count();
    }


    public function render()
    {
        return view('livewire.quiz-livewire');
    }
}
