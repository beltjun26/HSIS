<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name','user_id' ,
    ];

    public function logininfo(){
    	return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function addAccountabilitiesAdmin(){
    	return $this->hasMany('App\Accountability');
    }
}
