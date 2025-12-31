<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanCampaign1 extends Migration
{
    public function up()
    {
        Schema::table('san_san_campaign1', function($table)
        {
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_campaign1', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
