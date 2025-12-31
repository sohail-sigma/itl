<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanOffices extends Migration
{
    public function up()
    {
        Schema::table('san_san_offices', function($table)
        {
            $table->text('mapurl')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_offices', function($table)
        {
            $table->dropColumn('mapurl');
        });
    }
}
