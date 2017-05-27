<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'LRN', 'first_name', 'middle_name', 'last_name', 'address', 'gender', 'mother_fullname', 'father_fullname', 'contact_num', 'bdate',
    ];

    protected $dates = [
    	'bdate',
    ];

    function student_acc(){
    	return $this->belongsToMany('App\Accountability', 'pay', 'LRN', 'student_LRN');
    }
}
