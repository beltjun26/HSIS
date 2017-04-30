<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowedTable extends Migration
{
    public function up()
    {
         Schema::create('borrowed', function($table){
            $table->increments('id', 11);
            $table->date('date');
            $table->string('status', 60);
            $table->string('student_LRN', 12);
            $table->foreign('student_LRN')->references('LRN')->on('student');
            $table->string('book_id', 60);
            $table->foreign('book_id')->references('id')->on('book');
        });
    }

    public function down()
    {
        Schema::drop('borrowed');
    }
}
