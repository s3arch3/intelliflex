<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id');
            // $table->foreignId('subject_id');
            $table->boolean('is_active');
            $table->string('quiz_name', config('constants.quiz_name_max_length'));
            $table->string('quiz_description', config('constants.quiz_description_max_length'));
            $table->integer('times_completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}