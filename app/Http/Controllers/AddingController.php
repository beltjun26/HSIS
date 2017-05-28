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
use App\Pay;
use Auth;
use DB;

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
        return view('accountability.add_accountability');
    }

    public function addAccountability(Request $request){

        Accountability::create([
            'accountability_name' => $request->accountability_name,
            'amount' => $request->accountability_amount,
            'user_id' => Auth::user()->id,
            'due_date' => $request->due_date,
            'scope' => $request->scope
        ]);

        $id = Auth::user()->id;

        return redirect('/accountability/view_accountability');

    }


    public function editProfile(Request $request){
        
    }

}