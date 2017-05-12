<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddAccountabilityTable extends Migration
{
    public function up()
    {
        Schema::create('add_Accountability', function($table){
            $table->increments('id', 11);
            $table->integer('accountability_id')->unsigned();
            $table->string('teacher_id', 12);
            $table->string('cashier_id', 12);
            $table->string('librarian_id', 12);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('add_Accountability');
    }
}
