<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizGoal extends Model
{
    use HasFactory;
    protected $table="quiz_goals"; // override table name

    protected $fillable=[
        'user_id',
        'quiz_id',
        'goal_id',
        'is_achieved',
        'progress',
        'date_achieved'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
