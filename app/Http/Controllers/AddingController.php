<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Admin;
use App\Cashier;
use App\Teacher;
use App\Grade;
use App\Librarian;
use App\Section;
use App\Accountability;

class AddingController extends Controller
{
    public function registerUser(Request $request){
        $user = $this->create($request->all());
    }
    protected function create(array $data)
    {

        $user = User::create([
            'username' => $data['username'],
            'type' => $data['type'],
            'password' => bcrypt($data['password']),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'bdate' => $data['bdate'],
            'gender' => $data['gender'],
        ]);
        if($data['type']=="admin"){
            Admin::create([
                'user_id' => $user->id,
            ]);
        }elseif ($data['type']=="cashier") {
            Cashier::create([
                'user_id' => $user->id,
                ]);
        }elseif ($data['type']=="librarian") {
            Librarian::create([
                'user_id' => $user->id,
                ]);
        }elseif ($data['type']=="teacher") {
            Teacher::create([
                'user_id' => $user->id,
                'position' => $data['position'],
                'contact' => $data['contact'],
                'address' => $data['address'],
                'email' => $data['email'],
                ]);
        }
        return $user;
    }

    public function addStudent(Request $request){
        Student::create($request->all());
        return "success";
    }

    public function addGrade(Request $request){
        Grade::create($request->all());
        return $request->name;
    }

    public function addClass(Request $request){

        if(Section::whereName($request->name)->exists()){
            return "error";
        }
        Section::create($request->all());
            return "success";
    }


    public function viewAddAccountability(){
        return view('/add_accountability');
    }

    public function librarianAddAccountability(Request $request){
        Accountability::create([
            'accountability_name' => $request->accountability_name,
            'student_LRN' => $request->student_LRN,
            'date' => $request->date,
            'decimal' => $request->accountability_amount,
            'type'=>'librarian',
            'user_id' => Auth::user()->id
        ]);
        return redirect('/librarian');

    }
}
