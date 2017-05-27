<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;

class TeacherHomeController extends Controller
{
    function index(){
    	return view('teacher.homepage(teacher)');
    }
    function schedule(){
    	return view('teacher.schedule');
    }
    function classRecord(){
    	$student = DB::table('student_ins')
	    	->select('student_ins.section_name', 'student_ins.student_LRN')
	    	->join('teaches','teaches.section_name','teaches.teacher_id')
	    	->where(['student_ins.section_name'=>'teaches.section_name'])
	    	->get();
   		 
    	return view('teacher.classrecord', compact('student'));
    }
    function profile($username){

    	// $student = DB::table('student_ins')
	    // 	->select('student_ins.section_name', 'student_ins.student_LRN')
	    // 	->join('teaches','teaches.section_name','teaches.teacher_id')
	    // 	->where(['student_ins.section_name'=>'teaches.section_name'])
	    // 	->get();
	    $user = User::whereUsername($username)->first();
        if($user->type == "teacher"){
            $teacher = $user;
            return view('teacher.profile', compact('teacher'));
        }
   		 $grade = "Grade 9";
   		 $sectionName = "Emerald";
		return view('teacher.profile(teacher)', compact('grade','sectionName','teacher'));
    }

}
