<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupProfessor extends Model
{
    use HasFactory;
    protected $table="group_professors"; // override table name

    protected $fillable=[
        'code',
        'name',
        'description',
        'is_active'
    ];

    public function groupStudents()
    {
        return $this->hasMany(GroupStudent::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
