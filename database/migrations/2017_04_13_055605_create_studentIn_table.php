<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInTable extends Migration
{
   
    public function up()
    {
        Schema::create('student_in', function($table){
            $table->increments('id', 11);
            $table->string('student_LRN', 12);
            $table->foreign('student_LRN')->references('LRN')->on('student');
            $table->string('section_name', 60);
            $table->foreign('section_name')->references('name')->on('section');
        });
    }

    public function down()
    {
        Schema::drop('student_in');
    }
}
