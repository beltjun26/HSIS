<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $primaryKey = 'LRN';
    

    protected $fillable = [
    	'LRN', 'first_name', 'middle_name', 'last_name', 'address', 'gender', 'mother_fullname', 'father_fullname', 'contact_num', 'bdate',
    ];

    protected $dates = [
    	'bdate',
    ];

<<<<<<< HEAD
    function student_acc(){
    	return $this->belongsToMany('App\Accountability', 'pay', 'LRN', 'student_LRN');
=======
    public function fullName(){
    	return $this->first_name." ".$this->middle_name." ".$this->last_name;
>>>>>>> 2907478862790930eb2d1ba17c156e23d25d0277
    }
}
