<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanPrefferedAirline extends Migration
{
    public function up()
    {
        Schema::create('san_san_preffered_airline', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('airline_name');
            $table->string('airline_code');
            $table->string('country');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_preffered_airline');
    }
}
