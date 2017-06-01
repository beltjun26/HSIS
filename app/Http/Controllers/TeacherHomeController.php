<?php

namespace App\Http\Controllers;
use App\User;
use App\Section;
use App\Teacher;
use App\Student;
use App\StudentIn;
use DB;
use Auth;
use Illuminate\Http\Request;
    

class TeacherHomeController extends Controller
{
    function index(){
    	return view('teacher.homepage');
    }
    function schedule(){
    	return view('teacher.schedule');
    }
    function classRecord($sectionName){	
      $students = DB::table('marks')->select('LRN', 'first_name', 'last_name', 'marks.grade', 'subject')
        ->join('students', 'students.LRN', 'student_LRN')
        ->join('subjects','subjects.grade_id','marks.id')
        // ->where('LRN' ,  'student_LRN')
        ->get();
        echo $students;
        $grade_section  = Section::whereName($sectionName)->first();
    	return view('teacher.classrecord', compact('grade_section','students'));
    }
    function profile($username){
        $user = User::whereUsername($username)->first();
        // echo $user->id;
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
    }}

    function student(){
        return view('teacher.student');
    }

    public function getClass($name){
        $result = Section::whereName($name)->first();
        return view('teacher.classProfile', compact('result'));
    }

    public function assignToSection($name){
        $result = Section::whereName($name)->first();
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
    public function edit($sectionName,$LRN){
         $students = DB::table('marks')->select('LRN', 'first_name', 'last_name', 'marks.grade', 'subject')
        ->join('students', 'students.LRN', 'student_LRN')
        ->join('subjects','subjects.grade_id','marks.id')
        ->where('students.LRN' , $LRN)
        ->get();
        // $stud = Mark::where("student_LRN",$LRN)->first();
        // echo $stud;
        return view('teacher.edit_grade',compact('sectionName', 'LRN','students'));

    }

    public function update(Request $request){
        $password = $request->input("password");
        echo $password;

       $array = array();
       $data = $request;
      
       

        
    } 
}
