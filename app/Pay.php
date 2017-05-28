<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{

	protected $fillable = [
        'status','date','accountability_id','Student_LRN'
    ];
}