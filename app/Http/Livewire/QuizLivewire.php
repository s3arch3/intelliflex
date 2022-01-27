<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuizLivewire extends Component
{

    public $quizID;

    public function mount($quizID){
        // mount is called to mount quizID to this quizID
        $this->quizID = $quizID; // just to make sure
    }
    public function render()
    {
        return view('livewire.quiz-livewire');
    }
}