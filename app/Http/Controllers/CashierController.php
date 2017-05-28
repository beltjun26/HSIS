<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Accountability;
use App\User;
use App\StudentIn;
use App\Pay;
use App\Section;
use App\Cashier;
use App\Student;
use App\Grade;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cashier.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // public function home(){
        
    // }

    public function profile($username){
        $user = User::whereUsername($username)->first();
        if($user->type == "cashier"){
            $cashier = $user;
            return view('cashier.profile', compact('cashier'));
        }
    }


    public function collectPayment(Request $request){
        $text = $request->input('student_name');
        if( preg_match( '!\(([^\)]+)\)!', $text, $match ) )
            $LRN = $match[1];

        $student = Student::where('LRN', '=', $LRN)->get();

        $student_info = StudentIn::where('student_LRN', $LRN)->first();

        $grade_section = Section::where('name', $student_info->section_name)->first();

        $grade = Grade::where('id', $grade_section->grade_id)->first();

        $accountability = Pay::where('student_LRN', $LRN)->get();

        $to_pay = array();
        foreach($accountability as $acc){
            
            $acc_detail = Accountability::where('id', $acc->accountability_id)->first();
            array_push($to_pay, $acc_detail);
        }

        return view('cashier.collect_payment', compact('student', 'student_info', 'grade', 'to_pay'));
    }

    public function feeCategories(){
        $categories = Accountability::all();
        return view('cashier.fee_categories', compact('categories'));
    }

    public function overdues(){
        return view('cashier.overdues');
    }

    public function newCategory(Request $request){
        $student = Student::all();
        if(sizeof($student)>0){
            $acc = new Accountability;
            $acc->accountability_name = $request->input('accountability_name');
            $acc->amount = $request->input('amount');
            $acc->due_date = $request->input('due_date');
            $acc->scope = $request->input('scope');
            $acc->user_id = $request->input('user_id');
            $acc->save();

            $accountability_id = DB::getPdo()->lastInsertId();
            $student = Student::all();
            if($request->input('scope')=="all"){
                foreach($student as $std){
                    $pay = new Pay;
                    $pay->student_LRN = $std->LRN;
                    $pay->status = "unpaid";
                    $pay->accountability_id = $accountability_id;
                    $pay->save();
                }
            }
        }

        return redirect('/cashier/fee_categories');
    }

    public function editCategory(Request $request){
        $acc = Accountability::findOrFail($request->input('category_id'));

        $acc->accountability_name = $request->input('accountability_name');
        $acc->amount = explode(" ", $request->input('amount'))[1];
        $acc->due_date = $request->input('due_date');
        $acc->scope = $request->input('scope');
        $acc->user_id = $request->input('user_id');
        $acc->save();

        return redirect('/cashier/fee_categories');
    }

    public function deleteCategory(Request $request){
        $id = $request->input('category_id');
        $category = Accountability::findOrFail($id);
        $category->delete();

        return redirect('/cashier/fee_categories');
    }

    public function collectionHistory(){
        return view('cashier.collection_history');
    }


    public function home(){
        $accountabilities = Accountability::all();
        $pays = Pay::select(DB::raw('DISTINCT student_LRN'))->get();
        $students = Student::all();
        return view('cashier.home', compact('accountabilities', 'pays', 'students'));
    }

     public function collectFees(){
        $students = Student::all();
        return view('cashier.collect_fees', compact('students'));
    }

    // public function findPage($page_name){
    //     return view('cashier.'.$page_name);
    // }
}
