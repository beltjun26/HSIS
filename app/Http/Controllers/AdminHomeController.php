<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    function index(){
    	
    }
    function addUser(){
    	return view('admin.addUser');
    }
}
