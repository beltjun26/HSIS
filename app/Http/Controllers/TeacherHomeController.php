<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use App\Student;
use Illuminate\Http\Request;
use App\Section;
use App\StudentIn;

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

    public function getClass($name){
        $result = Section::whereName($name)->first();
        return view('teacher.classProfile', compact('result'));
    }

    public function assignToSection($name){
        $result = Section::whereName($name);
        return view('teacher.assignStudent', compact('result'));
    }

    public function searchStudent(Request $request){
        $search = $request->search;
        $students = Student::where('first_name', 'LIKE', '%'.$search.'%')
            ->orWhere('middle_name', 'LIKE', '%'.$search.'%')
            ->orWhere('last_name', 'LIKE', '%'.$search.'%')
            ->get();
        return $students;

    }

    public function assignStudent(Request $request){
        $student = StudentIn::where("student_LRN", $request->LRN)->first();
        if(is_null($student)){
        StudentIn::create([
            'student_LRN'=>$request->LRN,
            'section_name' => $request->grade
        ]); 
            return "OK";
        }else{
            return "Student is already under ".$student->section_name;
        }
    } 
}
