<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
    	'name', 'classroom', 'grade_id', 'teacher_id'
    ];
    
}
