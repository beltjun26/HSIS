<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrarianTable extends Migration
{
    public function up()
    {
        Schema::create('librarians', function($table){
            $table->string('id', 12)->primary();
            $table->integer('id_users');
            $table->string('lib_name', 60);
            $table->string('lib_password', 60);
        });
    }

    public function down()
    {
        Schema::drop('librarian');
    }
}
