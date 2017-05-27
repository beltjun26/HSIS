<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountability extends Model
{
	protected $fillable = [
        'id','accountability_name' ,'decimal', 'cashier_id', 'librarian_id',
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

    
}
