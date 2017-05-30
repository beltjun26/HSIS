<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id','name'
    ];

    public function borrowedBy(){
    	return $this->belongsTo('App\Student');
    }
}
