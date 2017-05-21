<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;	
use App\User;
use App\Admin;
use App\Cashier;
use App\Librarian;
use App\Teacher;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    function index(){
    	return view('admin.home');
    }

    function addUser(){
    	return view('admin.addUser');
    }

    public function account(){
    	$admins = Admin::all();
    	return view('admin.account', compact('admins'));
    }

    public function getAllAccount(Request $request){
        // return User::all();
        $users = User::whereType($request->input('type'))->get();
        // if($request->input('type') == "cashier"){
        //     $users =  Cashier::all();
        // }
        // if($request->input('type') == "admin"){
        //     $users =  Admin::all();
        // }
        // if($request->input('type') == "teacher"){
        //     $users =  Teacher::all();
        // }
        // if($request->input('type') == "librarian"){
        //     $users = Librarian::all();
        // }
        foreach ($users as $key => $value) {
            $users[$key]['name'] = $value->nameOfUser();
            $users[$key]['date'] = $value->bdate->format('l j F Y');
        }
        return $users;
    }

    public function profile($username){
        $user = User::whereUsername($username)->first();
        if($user->type == "admin"){
            $admin = $user;
            return view('admin.profile', compact('admin'));
        }
    }
}