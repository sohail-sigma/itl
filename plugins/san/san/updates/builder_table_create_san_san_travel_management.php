<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanTravelManagement extends Migration
{
    public function up()
    {
        Schema::create('san_san_travel_management', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_travel_management');
    }
}
