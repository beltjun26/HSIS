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
    function class(){
    	$student = DB::table('student_ins')
    	->select('student_ins.section_name', 'student_ins.student_LRN')
    	->join('teaches','teaches.section_name','teaches.teacher_id')
    	->where(['student_ins.section_name'=>'teaches.section_name'])
    	->get();
    }
    
}

// ->join('student_ins','section_name', '=', 'student_ins.section_name')
