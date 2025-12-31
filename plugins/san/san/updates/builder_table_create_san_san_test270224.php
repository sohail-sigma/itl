<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanTest270224 extends Migration
{
    public function up()
    {
        Schema::create('san_san_test270224', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('f_name');
            $table->text('l_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_test270224');
    }
}
