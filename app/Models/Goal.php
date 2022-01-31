<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $table="goals"; // override table name

    protected $fillable=[
        'name',
        'description',
        'requirement'
    ];
}
