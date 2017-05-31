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

    public function hasAccountabilities(){
    	return $this->belongsToMany('App\Accountability','pays','student_LRN','LRN');
    }

    public function fullName(){
    	return $this->first_name." ".$this->middle_name." ".$this->last_name;
    }

    public function hasAccountabilitesStudent(){
    	return $this->hasMany('App\Accountability');
    }

    public function hasBooks(){
        return $this->hasMany('App\Book');
    }

    public function hasStudentInfo(){
        return $this->belongsTo('App\StudentIn', 'LRN', 'student_LRN');
    }

    public function pays(){
        return $this->belongsToMany('App\Accountability', 'pays', 'student_LRN', 'accountability_id');
    }
}
