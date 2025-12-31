<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanSwisssummercampaign extends Migration
{
    public function up()
    {
        Schema::table('san_san_swisssummercampaign', function($table)
        {
            $table->string('desireddestination');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_swisssummercampaign', function($table)
        {
            $table->dropColumn('desireddestination');
        });
    }
}
