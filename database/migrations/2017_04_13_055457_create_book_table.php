<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    public function up()
    {
        Schema::create('book', function($table){
            $table->string('id', 60)->primary();
            $table->string('name', 60);
        });
    }

    public function down()
    {
        Schema::drop('book');
    }
}
