<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupQuiz extends Model
{
    use HasFactory;
    protected $table="group_quizzes"; // override table name

    protected $fillable=[
        'group_id',
        'quiz_id',
    ];

    public function groupProfessor()
    {
        return $this->belongsTo(GroupProfessor::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
