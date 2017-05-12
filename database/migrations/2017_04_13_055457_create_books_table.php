<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function($table){
            $table->string('id', 60)->primary();
            $table->string('name', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('books');
    }
}
