<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariansTable extends Migration
{
    public function up()
    {
        Schema::create('librarians', function($table){
            $table->increments('id', 12);
            $table->integer('user_id');
            $table->string('name', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('librarians');
    }
}
