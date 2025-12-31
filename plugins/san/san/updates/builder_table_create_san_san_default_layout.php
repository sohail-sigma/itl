<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanDefaultLayout extends Migration
{
    public function up()
    {
        Schema::create('san_san_default_layout', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('first_name');
            $table->string('last_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_default_layout');
    }
}
