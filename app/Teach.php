<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teach extends Model
{
    protected $table = 'teaches';
    protected $fillable = [
    	'id', 'subject', 'time', 'section_name','teacher_id'
    ];
}
