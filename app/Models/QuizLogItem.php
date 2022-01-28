<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizLogItem extends Model
{
    use HasFactory;
    protected $table="quiz_log_items"; // override table name
    protected $fillable=[
        'user_id',
        'quiz_log_id',
        'quiz_id',
        'question_id',
        'answer_id',
        'is_correct'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function quizLog()
    {
        return $this->belongsTo(QuizLog::class);
    }
}
