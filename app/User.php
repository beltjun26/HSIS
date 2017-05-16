<?php

namespace App;

use Auth;
use App\Admin;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password','username' ,'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function userName(){
        if(Auth::user()->type == "admin"){
            $admin = Admin::whereUser_id(Auth::user()->id)->first();
            return $admin->name;
            // return $admin = $this->hasOne('App\Admin', 'id')->select('name');
           
        }
    }
    
}
