<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanEnquiry4 extends Migration
{
    public function up()
    {
        Schema::table('san_san_enquiry', function($table)
        {
            $table->dropColumn('test');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_enquiry', function($table)
        {
            $table->string('test', 191);
        });
    }
}
