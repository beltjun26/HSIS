<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashiersTable extends Migration
{
    public function up()
    {
        Schema::create('cashiers', function($table){
            $table->increments('id', 12);
            $table->integer('user_id');
            $table->date('start_appointment');
            $table->date('end_appointment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cashiers');
    }
}
