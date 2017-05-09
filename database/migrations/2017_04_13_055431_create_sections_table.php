<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{

    public function up()
    {
        Schema::create('sections', function($table){
            $table->string('name', 60)->primary();
            $table->string('classroom', 11);
            $table->string('attribute', 60);
            $table->string('grade_name', 60);
            $table->string('teacher_id', 12);
            $table->foreign('teacher_id')->references('id')->on('teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('section');
    }
}
