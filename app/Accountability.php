<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountability extends Model
{
	protected $fillable = [
        'user_id','accountability_name' ,'decimal', 'date', 'student_LRN', 'type', 'status'
    ];

    public function teacheracc(){
    	return $this->belongsTo('App\Teacher');
    }

    public function cashieracc(){
    	return $this->belongsTo('App\Cashier');
    }

    public function librarianacc(){
    	return $this->belongsTo('App\Librarian');
    }

    public function studentacc(){
        return $this->belongsTo('App\Student');
    }

    public function adminacc(){
        return $this->belongsTo('App\Admin');
    }
    
}
