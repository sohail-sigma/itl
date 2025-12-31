<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanDestinations6 extends Migration
{
    public function up()
    {
        Schema::table('san_san_destinations', function($table)
        {
            $table->string('mob_banner_type', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_destinations', function($table)
        {
            $table->dropColumn('mob_banner_type');
        });
    }
}
