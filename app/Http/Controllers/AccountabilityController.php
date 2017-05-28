<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Accountability;
use App\User;

class AccountabilityController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $accs = Accountability::where('user_id',$id)->get();
        return view('accountability.view_accountability', compact('accs'));
    }

    public function edit($id){
    	$acc = Accountability::find($id);
    	return view('accountability.edit_accountability', compact('acc'));
    }

    public function update(Request $request, $id){

    	$acc = Accountability::find($id);

    	$acc['accountability_name'] = $request->accountability_name;
    	$acc['amount'] = $request->accountability_amount;
    	$acc['due_date'] = $request->accountability_date;
        $acc['scope'] = $request->scope;
        $acc['user_id'] = Auth::user()->id;

    	$acc->update();

    	return redirect('accountability.view_accountability');
    }
}
