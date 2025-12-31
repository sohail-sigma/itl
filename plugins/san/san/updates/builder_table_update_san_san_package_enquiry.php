<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanPackageEnquiry extends Migration
{
    public function up()
    {
        Schema::table('san_san_package_enquiry', function($table)
        {
            $table->text('remarks_comments')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_package_enquiry', function($table)
        {
            $table->dropColumn('remarks_comments');
        });
    }
}
