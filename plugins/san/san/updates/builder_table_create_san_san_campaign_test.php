<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanCampaignTest extends Migration
{
    public function up()
    {
        Schema::create('san_san_campaign_test', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('fname');
            $table->string('lname');
            $table->string('telephone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_campaign_test');
    }
}
