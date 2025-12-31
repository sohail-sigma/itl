<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanPage3 extends Migration
{
    public function up()
    {
        Schema::table('san_san_page', function($table)
        {
            $table->boolean('is_chairman_msg')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('san_san_page', function($table)
        {
            $table->dropColumn('is_chairman_msg');
        });
    }
}
