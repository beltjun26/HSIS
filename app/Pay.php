<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{

	protected $fillable = [
		'status', 'date', 'accountability_id', 'student_LRN',
	];

    public function payer(){
    	return $this->belongsTo('App\Student', 'student_LRN');
    }

    public function acc_details(){
    	return $this->belongsTo('App\Accountability', 'accountability_id', 'id');
    }
}
