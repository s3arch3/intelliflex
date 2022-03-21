<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizLog;
use App\Models\QuizLogItem;

class QuizLivewire extends Component
{
    public $groupProfessorID;
    public $groupQuizID;

    public $quizID; // the id of the selected quiz ex. 1, 2, 3, so on...
    public $quizItem; // contains the name, and description ^_^
    public $questionsCount; // (quizSize) counts the $quizItem based on model relationship access on mount

    public $quizLog; // the history of this quiz
    public $quizLogItem; // history items under the quizLog

    public $count = 0; // increments as the user proceeds on the next question, is also an indicator of current question number.
    public $currentQuestion; // this is a Question item which holds the current question data being displayed on the screen
    public $answeredQuestions = []; // this is an array containing all the ID of the answered questions.
    public $userAnswered; // value property ex. 3,1 (answer_id, is_checked) 3 is the answer id and 1 is checked (0 is not). array which is tied to the choices loop in quiz-livewire.blade.php, changes values depending on what's selected (answer_id, is_checked)

    public $correctAnswers; //
    public $quizPercentage; //


    public $quizInStart = true; // if true, start div will be visible in quiz-livewire.blade.php. Initially set to true to show the start page first
    public $quizInProgress = false;  // if true, question div will be visible in quiz-livewire.blade.php
    public $quizInEnd = false; // if true, end div will be visible in quiz-livewire.blade.php

    // $refresh magic word to refresh component
    protected $listeners = [
        'refresh' => '$refresh',
    ];



    // mount is to manually attach the parameters passed when the livewire component is called
    // same as __construct to blade components
    // for prepping the data before the quiz starts
    public function mount($quizID, $groupProfessorID, $groupQuizID)
    {
        // mount is called to mount quizID to this quizID
        $this->quizID = $quizID; // just to make sure
        $this->quizItem = Quiz::findOrFail($quizID); // find the quiz using the id passed to this livewire component
        $this->questionsCount =  $this->quizItem->questions()->count(); // get all questions under that quiz
        $this->groupProfessorID = $groupProfessorID;
        $this->groupQuizID = $groupQuizID;
    }

    // this function is fired when the user clicks "Start Quiz" on quiz-livewire.blade.php
    public function startQuiz()
    {
        // A. hide start and end div, show question div
        $this->quizInStart = false;
        $this->quizInProgress = true;
        $this->quizInEnd = false;

        // C. start the count from 1 and reset the required stuff
        $this->count = 1;
        $this->answeredQuestions = [];
        $this->userAnswered = null;
        $this->currentQuestion = null;
        $this->correctAnswers = 0;
        $this->quizPercentage = 0;
        $this->quizLog = null;


        // B. create a quizLog item
        $this->quizLog = QuizLog::create([
            'user_id' => auth()->id(),
            'quiz_id' => $this->quizID,
            'group_quiz_id' => $this->groupQuizID,
            'group_professor_id' => $this->groupProfessorID,
        ]);

        $this->quizLog->save();


        // D. get the first question related to this quiz
        $this->currentQuestion = $this->getNextQuestion();
        $this->emit('refresh'); // trigger refresh magic?
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
            return; // skip below code
        }

        // C. add this question's id to the answeredQuestions array so that it will be excluded later on
        array_push($this->answeredQuestions, $question->id);
        // D. return that question item

        return $question;
    }

    // when the user clicks "Next Question" on quiz-livewire.blade.php
    public function nextQuestion()
    {

        // A. Push all the question ids to quiz_header table to retreve them while displaying the quiz details
        $this->quizLog->questions_taken = serialize($this->answeredQuestions);
        /*a:9:{
            i:0;i:8;
            i:1;i:5;
            i:2;i:7;
            i:3;i:9;
            i:4;i:2;
            i:5;i:4;
            i:6;i:3;
            i:7;i:1;
            i:8;i:6;
        }
        */

        // B. Retrive the answer_id and value of answers clicked by the user and push them to Quiz table.
        list($answerId, $isChoiceCorrect) = explode(',', $this->userAnswered);
        // dd('id: '.$answerId.' correct?: '.$isChoiceCorrect);

        // C. Insert the current question_id, answer_id and whether it is correnct or wrong to quiz table.
        $this->quizLogItem = QuizLogItem::create([
            'user_id' => auth()->id(),
            'quiz_log_id' => $this->quizLog->id,
            'quiz_id' => $this->currentQuestion->quiz_id,
            'question_id' => $this->currentQuestion->id,
            'answer_id' => $answerId,
            'is_correct' => $isChoiceCorrect
        ]);

        // D. save the quizlogitem and quizLog?
        $this->quizLogItem->save();
        $this->quizLog->save();

        // E. Increment the quiz counter so we terminate the quiz on the number of question user has selected during quiz creation.
        $this->count++;

        // F. Reset the veriables for next question
        $answerId = '';
        $isChoiceCorrect = '';
        $this->userAnswered = '';

        // G. Finish the quiz when user has successfully taken all question in the quiz.
        if ($this->count == $this->questionsCount + 1)
        {
            $this->showResults();
            return;
        }

        // H. Get a random question again
        $this->currentQuestion = $this->getNextQuestion();
        $this->emit('refresh'); // trigger refresh magic?
    }

    // called when all questions are done being answered
    public function showResults()
    {
        // finalize stuff

        // A. Count all correct answers bu getting quizLogItems for this quiz and checking whether they are is_correct == 1
        $this->correctAnswers = QuizLogItem::where('quiz_log_id', $this->quizLog->id)
        ->where('is_correct', '1')
        ->count();

        // B. Calculate accuracy level by (correct answers / questions count)
        $this->quizPercentage = round(($this->correctAnswers / $this->questionsCount) * 100, 2);

        // C. save questions taken to the quizLog
        $this->quizLog->questions_taken = serialize($this->answeredQuestions);

        // D. update the completed field of that quizlog to true
        $this->quizLog->completed = true;

        // E. insert score to quizlog
        $this->quizLog->score = $this->correctAnswers;
        $this->quizLog->number_of_questions = $this->questionsCount;

        // F. save all stuff in the quiz log
        $this->quizLog->save();

        // quizItem update the times_completed field
        $this->quizItem->times_completed = $this->quizItem->times_completed + 1;
        $this->quizItem->save();

        // G. hide start and question div, show end div
        $this->quizInStart = false;
        $this->quizInProgress = false;
        $this->quizInEnd = true;

        // run the goals checker here
        app('App\Http\Controllers\GoalController')->checkGoal([
            'quizID' => $this->quizID
        ]);

        // H. emit refresh
        $this->emitTo('quiz-livewire', 'refresh');
    }

    public function render()
    {
        return view('livewire.quiz-livewire');
    }
}
