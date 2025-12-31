<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanCampaign13 extends Migration
{
    public function up()
    {
        Schema::table('san_san_campaign1', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_campaign1', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
}
