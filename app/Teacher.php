<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id','teacher_fname' ,'teacher_mname', 'teacher_lname', 'position', 'contact', 'address', 'email',
    ];
}
