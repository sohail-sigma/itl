<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanAboutEnquiry2 extends Migration
{
    public function up()
    {
        Schema::table('san_san_about_enquiry', function($table)
        {
            $table->string('diverse_vendor', 500)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_about_enquiry', function($table)
        {
            $table->dropColumn('diverse_vendor');
        });
    }
}
