<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanServices3 extends Migration
{
    public function up()
    {
        Schema::table('san_san_services', function($table)
        {
            $table->dropColumn('button_icon');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_services', function($table)
        {
            $table->string('button_icon', 255)->nullable();
        });
    }
}
