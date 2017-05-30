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
            $table->date('borrow_date');
            $table->date('return_date');
            $table->string('status', 60);
            $table->string('student_LRN', 12);
            $table->string('book_id', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('borrowed');
    }
}
