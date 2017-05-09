<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function($table){
            $table->string('id', 12)->primary();
            $table->string('name');
            $table->integer('id_users');
            $table->string('password', 100);
        });
    }

    public function down()
    {
        Schema::drop('admin');
    }
}
