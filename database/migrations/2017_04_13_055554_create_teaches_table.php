<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachesTable extends Migration
{

    public function up()
    {
        Schema::create('teaches', function($table){
            $table->increments('id', 11);
            $table->string('subject', 60);
            $table->time('time');
            $table->string('section_name', 60);
            $table->string('teacher_id', 12);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('teaches');
    }
}
