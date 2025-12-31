<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanCampaign1 extends Migration
{
    public function up()
    {
        Schema::create('san_san_campaign1', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('fname');
            $table->string('lname');
            $table->string('telephone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_campaign1');
    }
}
