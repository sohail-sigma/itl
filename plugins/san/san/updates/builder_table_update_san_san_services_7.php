<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanServices7 extends Migration
{
    public function up()
    {
        Schema::table('san_san_services', function($table)
        {
            $table->dropColumn('is_featured');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_services', function($table)
        {
            $table->boolean('is_featured');
        });
    }
}
