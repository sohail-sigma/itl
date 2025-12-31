<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanPackages3 extends Migration
{
    public function up()
    {
        Schema::table('san_san_packages', function($table)
        {
            $table->text('package_country_select')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_packages', function($table)
        {
            $table->dropColumn('package_country_select');
        });
    }
}

