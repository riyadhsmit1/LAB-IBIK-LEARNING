<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =
    [
        'title',
        'category',
        'lessons',
        'instructor',
        'role',
        'students',
        'rating',
        'image',
        'avatar',
    ];
}
