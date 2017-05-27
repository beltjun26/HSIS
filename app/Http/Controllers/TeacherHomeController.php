<?php

namespace App\Http\Controllers;
use App\User;
use App\Section;
use App\Teacher;
use App\Student_in;
use App\Student;
use DB;
use App\Student;
use Illuminate\Http\Request;
use App\Section;
use App\StudentIn;

class TeacherHomeController extends Controller
{
    function index(){
    	return view('teacher.homepage');
    }
    function schedule(){
    	return view('teacher.schedule');
    }
    function classRecord($sectionName){
        $section = $sectionName;
        $stud_in = Student_in::where('section_name', '=',  $sectionName)->get();
        $student = Student::where('LRN', '=', $stud_in->student_LRN)->get();
    	
   		 
    	return view('teacher.classrecord',compact('section','student'));
    }
    function profile($username){
	    $user = User::whereUsername($username)->first();
        // $userId = $user->id;
        $teachered = Teacher::where('user_id','=',$user->id)->first();
        // $teacherId = $teacher->id;
        $section = Section::where('teacher_id', '=', $teachered->id)->get();
        // $sectionName = $section->name;
        if($user->type == "teacher"){
            $teacher = $user;
            $grade = "Grade 9";
            $sectionName = "Emerald";
            return view('teacher.profile', compact('grade','sectionName','teacher','userId','teachered', 'section'));
        }
    }

    function student(){
        return view('teacher.student');
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
