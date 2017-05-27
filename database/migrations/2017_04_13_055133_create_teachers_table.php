<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{

    public function up()
    {
        Schema::create('teachers', function($table){
            $table->increments('id', 12);
            $table->integer('user_id');
            $table->string('position', 60);
            $table->string('contact', 11);
            $table->string('address', 60);
            $table->string('email', 60);
            $table->date('start_appointment');
            $table->date('end_appointment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('teachers');
    }
}
