<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{

    public function up()
    {
        Schema::create('sections', function($table){
            $table->string('name', 60);
            $table->string('classroom', 11);
            $table->string('attribute', 60);
            $table->string('grade_name', 60);
            $table->integer('teacher_id', 12);
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
        Schema::drop('sections');
    }
}
