<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanTestForm extends Migration
{
    public function up()
    {
        Schema::create('san_san_test_form', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('email', 255);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_test_form');
    }
}
