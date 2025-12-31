<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanNationality extends Migration
{
    public function up()
    {
        Schema::create('san_san_nationality', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('country_code');
            $table->string('country_name');
            $table->string('nationality');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_nationality');
    }
}
