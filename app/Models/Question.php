<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table="questions"; // override table name

    protected $fillable=[
        'user_id',
        'quiz_id',
        'is_active',
        'question',
        'explanation',
    ];
}
