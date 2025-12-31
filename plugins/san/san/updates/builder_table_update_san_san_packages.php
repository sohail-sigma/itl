<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanPackages extends Migration
{
    public function up()
    {
        Schema::table('san_san_packages', function($table)
        {
            $table->text('unique_caption')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_packages', function($table)
        {
            $table->dropColumn('unique_caption');
        });
    }
}
