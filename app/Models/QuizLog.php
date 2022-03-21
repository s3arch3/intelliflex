<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizLog extends Model
{
    use HasFactory;
    protected $table="quiz_logs"; // override table name

    protected $fillable=[
        'user_id',
        'quiz_id',
        'group_quiz_id',
        'group_professor_id',
        'completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quizLogItems()
    {
        return $this->hasMany(QuizLogItem::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
