<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountabilityTable extends Migration
{
    public function up()
    {
         Schema::create('accountability', function($table){
            $table->increments('id', 11); //aka accountability_id
            $table->string('accountability_name', 60);
            $table->decimal('decimal', 5, 2);
        });
    }

    public function down()
    {
        Schema::drop('accountability');
    }
}
