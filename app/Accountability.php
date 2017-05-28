<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Accountability extends Model
{
	protected $fillable = [
        'id','user_id','accountability_name' ,'amount', 'scope', 'due_date'
    ];

    public function acc_id($acc_name){
    	$id = DB::table('accountabilities')->where('accountability_name', $acc_name);
    	return $id;
    }

    public function userAddAccountability(){
        return $this->belongsTo('App\User');
    }

    public function studentAccountability(){
        return $this->belongsToMany('App\Student','pay','accountability_id','student_LRN');
    }
}
