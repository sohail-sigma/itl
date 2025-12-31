<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanDestinationCities extends Migration
{
    public function up()
    {
        Schema::table('san_san_destination_cities', function($table)
        {
            $table->string('city_name', 500)->change();
            $table->string('country_code', 500)->change();
            $table->string('country_name', 500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_destination_cities', function($table)
        {
            $table->string('city_name', 191)->change();
            $table->string('country_code', 191)->change();
            $table->string('country_name', 191)->change();
        });
    }
}
