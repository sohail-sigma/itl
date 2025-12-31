<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanDestinationCities extends Migration
{
    public function up()
    {
        Schema::create('san_san_destination_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('city_id');
            $table->integer('city_code');
            $table->string('city_name');
            $table->string('country_code');
            $table->string('country_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_destination_cities');
    }
}
