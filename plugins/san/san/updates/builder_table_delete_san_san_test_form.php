<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableDeleteSanSanTestForm extends Migration
{
    public function up()
    {
        Schema::dropIfExists('san_san_test_form');
    }
    
    public function down()
    {
        Schema::create('san_san_test_form', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
        });
    }
}
