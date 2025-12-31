<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanDestinations extends Migration
{
    public function up()
    {
        Schema::table('san_san_destinations', function($table)
        {
            $table->text('iframe');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_destinations', function($table)
        {
            $table->dropColumn('iframe');
        });
    }
}
