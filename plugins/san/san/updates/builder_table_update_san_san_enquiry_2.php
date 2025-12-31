<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanEnquiry2 extends Migration
{
    public function up()
    {
        Schema::table('san_san_enquiry', function($table)
        {
            $table->string('contact_type');
            $table->text('message');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_enquiry', function($table)
        {
            $table->dropColumn('contact_type');
            $table->dropColumn('message');
        });
    }
}
