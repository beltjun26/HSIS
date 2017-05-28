<?php

namespace App;
use App\Teach;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $primaryKey = 'name';
	public $incrementing = false;
    protected $fillable = [
    	'name', 'classroom', 'grade_id', 'teacher_id'
    ];
   public function studentList(){
   		return $this->belongsToMany('App\Student', 'student_in', 'section_name', 'student_LRN');
   }

   public function getGrade(){
   		return $this->belongsTo('App\Grade', 'grade_id', 'id');
   }
}
