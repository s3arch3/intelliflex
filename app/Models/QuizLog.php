<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizLog extends Model
{
    use HasFactory;
    protected $table="quiz_logs"; // override table name

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
