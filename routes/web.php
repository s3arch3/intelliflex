<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'home'])->name('home');

// QUIZZES ROUTES
// QUIZZES ROUTES
// QUIZZES ROUTES
Route::resource('quizzes', QuizController::class);
Route::get('quizzes/log/{id}', [QuizController::class, 'log'])->name('log');
Route::post('quizzes/take/{id}', [QuizController::class, 'take'])->name('take');

// QUESTIONS ROUTES
// QUESTIONS ROUTES
// QUESTIONS ROUTES
Route::resource('questions', QuestionController::class);

// GROUPS ROUTES
// GROUPS ROUTES
// GROUPS ROUTES
Route::resource('groups', GroupController::class);
Route::post('groups/join', [GroupController::class, 'join'])->name('join');
Route::post('groups/confirmJoin', [GroupController::class, 'confirmJoin'])->name('confirmJoin');
Route::post('groups/removeStudent', [GroupController::class, 'removeStudent'])->name('removeStudent');
Route::get('groups/addQuiz/{id}', [GroupController::class, 'addQuiz'])->name('addQuiz');
Route::post('groups/addQuizToGroup', [GroupController::class, 'addQuizToGroup'])->name('addQuizToGroup');



// GOALS ROUTES
// GOALS ROUTES
// GOALS ROUTES
Route::resource('goals', GoalController::class);


