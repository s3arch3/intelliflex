<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table="groups"; // override table name

    protected $fillable=[
        'code',
        'name',
        'description',
        'is_active'
    ];

    public function groupMembers()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
