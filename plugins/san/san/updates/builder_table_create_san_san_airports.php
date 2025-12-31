<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanAirports extends Migration
{
    public function up()
    {
        Schema::create('san_san_airports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('airport_code');
            $table->string('airport_name');
            $table->string('country_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_airports');
    }
}
