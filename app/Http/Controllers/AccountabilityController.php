<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Accountability;
use App\User;
use DB;

class AccountabilityController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $results = DB::table('accountabilities')->join('pays', function($join){
            $join->on('accountabilities.id', '=', 'pays.accountability_id');
        })->where('user_id', $id)->get();

        return view('accountability.view_accountability', compact('results'));
    }

    public function edit($id){
    	
    }
    public function update(Request $request, $id){

    }
}