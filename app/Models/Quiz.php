<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table="quizzes"; // override table name

    // THE EXISTENCE OF $fillable
    // A mass-assignment vulnerability occurs when a user passes an
    // unexpected HTTP parameter through a request, and that parameter
    // changes a column in your database you did not expect. For example,
    // a malicious user might send an is_admin parameter through an HTTP
    // request, which is then passed into your model's create method,
    // allowing the user to escalate themselves to an administrator.

    protected $fillable=[
        'name',
        'description',
        'is_active',
        'times_completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function answers()
    {
        return $this->hasManyThrough(Answer::class, Question::class);
    }

    public function quizGoals()
    {
        return $this->hasMany(QuizGoal::class);
    }

}
