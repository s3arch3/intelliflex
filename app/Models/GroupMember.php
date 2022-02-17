<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;
    protected $table="group_members"; // override table name

    protected $fillable=[
        'user_id',
        'group_id',
    ];
}
