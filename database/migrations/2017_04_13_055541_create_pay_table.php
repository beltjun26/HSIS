<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayTable extends Migration
{
    public function up()
    {
        Schema::create('pay', function($table){
            $table->increments('id', 11);
            $table->string('status', 60);
            $table->date('date');
            $table->integer('accountability_id')->unsigned();
            $table->string('student_LRN', 12);
            $table->timestamps();
        
        });
    }

    public function down()
    {
        Schema::drop('pay');
    }
}
