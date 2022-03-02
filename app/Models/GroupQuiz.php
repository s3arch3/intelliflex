<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupQuiz extends Model
{
    use HasFactory;
    protected $table="group_quizzes"; // override table name

    protected $fillable=[
        'user_id',
        'group_professor_id',
        'quiz_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function groupProfessor()
    {
        return $this->belongsTo(GroupProfessor::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
