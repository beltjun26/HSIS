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
        'password','username' ,'type', 'bdate', 'gender', 'firstname', 'lastname',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'bdate',
    ];
    function typedUser(){
        if($this->type == "admin"){
            $admin = Admin::whereUser_id($this->id)->first();
            return $admin;
        }
    }

    function nameOfUser(){
        return $this->firstname." ".$this->lastname;
    }
    
}
