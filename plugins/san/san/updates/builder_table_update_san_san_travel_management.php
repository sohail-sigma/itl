<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanTravelManagement extends Migration
{
    public function up()
    {
        Schema::table('san_san_travel_management', function($table)
        {
            $table->dropColumn('button_title');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_travel_management', function($table)
        {
            $table->string('button_title', 255)->nullable();
        });
    }
}
