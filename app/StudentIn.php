<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentIn extends Model
{
    protected $table = 'student_in';
    protected $fillable = [
    	'student_LRN', 'section_name'
    ];
}
