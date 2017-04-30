<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddAccountabilityTable extends Migration
{
    public function up()
    {
        Schema::create('add_accountability', function($table){
            $table->increments('id', 11);
            $table->integer('accountability_id')->unsigned();
            $table->foreign('accountability_id')->references('id')->on('accountability');
            $table->string('teacher_id', 12);
            $table->foreign('teacher_id')->references('id')->on('teacher');
            $table->string('cashier_id', 12);
            $table->foreign('cashier_id')->references('id')->on('cashier');
            $table->string('librarian_id', 12);
            $table->foreign('librarian_id')->references('id')->on('librarian');
        });
    }

    public function down()
    {
        Schema::drop('add_accountability');
    }
}
