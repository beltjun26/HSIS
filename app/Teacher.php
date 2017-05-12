<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'id_users','teacher_fname' ,'teacher_mname', 'teacher_lname', 'position', 'contact_num', 'address', 'email',
    ];
}
