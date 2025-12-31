<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanServices8 extends Migration
{
    public function up()
    {
        Schema::table('san_san_services', function($table)
        {
            $table->text('country_select')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_services', function($table)
        {
            $table->dropColumn('country_select');
        });
    }
}

