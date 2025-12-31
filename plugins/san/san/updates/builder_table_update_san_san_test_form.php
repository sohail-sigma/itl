<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanTestForm extends Migration
{
    public function up()
    {
        Schema::table('san_san_test_form', function($table)
        {
            $table->dropColumn('email');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_test_form', function($table)
        {
            $table->string('email', 255);
        });
    }
}
