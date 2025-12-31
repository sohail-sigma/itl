<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanAramco extends Migration
{
    public function up()
    {
        Schema::create('san_san_aramco', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('salutation');
            $table->text('fname');
            $table->text('email');
            $table->integer('country_code');
            $table->text('mobile');
            $table->text('country');
            $table->text('city');
            $table->text('nationality');
            $table->text('language');
            $table->text('cruiselines');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_aramco');
    }
}
