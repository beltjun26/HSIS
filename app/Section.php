<?php

namespace App;
use App\Section_in;
use App\Teach;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $fillable = [
    	'name', 'classroom', 'grade_id', 'teacher_id'
    ];
   
    
}

// ->join('student_ins','section_name', '=', 'student_ins.section_name')
