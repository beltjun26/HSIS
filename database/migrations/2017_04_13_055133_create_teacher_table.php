<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{

    public function up()
    {
        Schema::create('teacher', function($table){
            $table->string('id', 12)->primary();
            $table->string('teacher_fname', 60);
            $table->string('teacher_mname', 60);
            $table->string('teacher_lname', 60);
            $table->string('position', 60);
            $table->string('contact_num', 11);
            $table->string('address', 60);
            $table->string('email', 60);
            $table->string('username', 60);
            $table->string('password', 60);
        });
    }

    public function down()
    {
        Schema::drop('teacher');
    }
}
