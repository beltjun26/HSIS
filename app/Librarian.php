<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    protected $fillable = [
        'user_id',
    ];
    public function logininfo(){ 
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
