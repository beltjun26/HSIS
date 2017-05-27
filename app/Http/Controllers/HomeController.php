<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest()){
            return view('/login');
        }else{
            if(Auth::user()->type == 'admin'){
                return redirect('/admin');
            }
            if(Auth::user()->type == 'teacher'){
                return redirect('/teacher');
            }
            if(Auth::user()->type=='cashier'){
                return redirect('/cashier');
            }
            if(Auth::user()->type == 'librarian'){
                return redirect('/librarian');
            }
                     
        }

    }
}
