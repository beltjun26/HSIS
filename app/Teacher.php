<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id', 'position', 'contact', 'address', 'email',
    ];
    public function logininfo(){
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
