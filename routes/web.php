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

// quizzes.index, quizzes.create, etc.
Route::resource('quizzes', QuizController::class);
// for take quiz feature which is a livewire component :D
Route::post('quizzes/take/{id}', [QuizController::class, 'take'])->name('take');
Route::get('quizzes/log/{id}', [QuizController::class, 'log'])->name('log');
// groups.index
Route::resource('groups', GroupController::class);
// goals.index
Route::resource('goals', GoalController::class);
//quetions
Route::resource('questions', QuestionController::class);
