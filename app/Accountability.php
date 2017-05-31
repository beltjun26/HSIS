<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Accountability extends Model
{
	protected $fillable = [
        'id','accountability_name', 'due_date', 'scope', 'amount', 'user_id'
    ];

    public function acc_id($acc_name){
    	$id = DB::table('accountabilities')->where('accountability_name', $acc_name);
    	return $id;
    }

    public function userAddAccountability(){
        return $this->belongsTo('App\User');
    }


    public function studentAccountability(){
        return $this->belongsToMany('App\Student','pays','accountability_id','student_LRN');
    }
}
