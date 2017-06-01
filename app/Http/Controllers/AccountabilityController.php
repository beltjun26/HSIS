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
        $accs = DB::table('accountabilities')->where('user_id', $id)->get();
        return view('accountability.view_accountability', compact('accs'));
    }

    public function edit($id){
    	$acc = Accountability::find($id);
        return view('accountability.edit_accountability', compact('acc'));
    }
    public function update(Request $request, $id){
        $account = Accountability::find($id);

        $account->accountability_name = $request->accountability_name;
        $account->scope = $request->scope;
        $account->amount = $request->accountability_amount;
        $account->due_date = $request->accountability_date;

        $account->save();

        redirect('accountability/view_accountability');
    }
}