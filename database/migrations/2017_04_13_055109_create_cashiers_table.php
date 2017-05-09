<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashierTable extends Migration
{
    public function up()
    {
        Schema::create('cashiers', function($table){
            $table->string('id', 12)->primary();
            $table->integer('id_users');
            $table->string('cashier_name', 60);
            $table->string('cashier_password', 60);
        });
    }

    public function down()
    {
        Schema::drop('cashier');
    }
}