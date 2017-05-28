<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Accountability;
use App\User;

class AccountabilityController extends Controller
{
    public function index($type){
        $accs = Accountability::where('type', $type)->get();
        return view('accountability.view_accountability', compact('accs'));
    }

    public function edit($id){
    	$acc = Accountability::find($id);
    	return view('accountability.edit_accountability', compact('acc'));
    }

    public function update(Request $request, $id){
    	$acc = Accountability::find($id);
    	$acc['student_LRN'] = $request->student_LRN;
    	$acc['accountability_name'] = $request->accountability_name;
    	$acc['decimal'] = $request->accountability_amount;
    	$acc['date'] = $request->accountability_date;

    	$acc->update();

    	return redirect('accountability.view_accountability');
    }
}
