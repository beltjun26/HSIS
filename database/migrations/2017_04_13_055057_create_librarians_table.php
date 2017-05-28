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
            $table->date('start_appointment')->nullable();
            $table->date('end_appointment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('librarians');
    }
}
