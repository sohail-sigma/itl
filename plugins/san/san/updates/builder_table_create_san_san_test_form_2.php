<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanTestForm2 extends Migration
{
    public function up()
    {
        Schema::create('san_san_test_form', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_test_form');
    }
}
