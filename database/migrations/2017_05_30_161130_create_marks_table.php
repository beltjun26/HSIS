<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::create('marks', function($table){
            $table->increments('id', 11);
            $table->integer('subject_id');
            $table->string('grading_period', 60)->nullable();
            $table->date('date')->nullable();
            $table->string('student_LRN', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
