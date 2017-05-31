<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountabilitiesTable extends Migration
{
    public function up()
    {
         Schema::create('accountabilities', function($table){
            $table->increments('id', 11); //aka accountability_id
            $table->string('accountability_name', 60);
            $table->date('due_date');
            $table->string('scope', 10);
            $table->decimal('amount', 5, 2);
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('accountabilities');
    }
}
