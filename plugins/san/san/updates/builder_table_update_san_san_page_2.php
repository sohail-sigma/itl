<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanPage2 extends Migration
{
    public function up()
    {
        Schema::table('san_san_page', function($table)
        {
            $table->text('content_10')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_page', function($table)
        {
            $table->dropColumn('content_10');
        });
    }
}
