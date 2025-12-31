<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanAboutEnquiry extends Migration
{
    public function up()
    {
        Schema::rename('san_san_enquiry', 'san_san_about_enquiry');
        Schema::table('san_san_about_enquiry', function($table)
        {
            $table->string('work_in', 500)->nullable();
            $table->string('speak_with', 500)->nullable();
            $table->string('first_name', 500)->nullable();
            $table->string('last_name', 500)->nullable();
            $table->string('email', 500)->nullable();
            $table->string('c_name', 500)->nullable();
            $table->string('designation', 500)->nullable();
            $table->string('phone', 500)->nullable();
            $table->string('country', 500)->nullable();
            $table->string('supplier', 500)->nullable();
            $table->string('gds_code', 500)->nullable();
            $table->string('bookable_gds', 500)->nullable();
            $table->dropColumn('query_data');
            $table->dropColumn('query_type');
        });
    }
    
    public function down()
    {
        Schema::rename('san_san_about_enquiry', 'san_san_enquiry');
        Schema::table('san_san_enquiry', function($table)
        {
            $table->dropColumn('work_in');
            $table->dropColumn('speak_with');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('email');
            $table->dropColumn('c_name');
            $table->dropColumn('designation');
            $table->dropColumn('phone');
            $table->dropColumn('country');
            $table->dropColumn('supplier');
            $table->dropColumn('gds_code');
            $table->dropColumn('bookable_gds');
            $table->text('query_data');
            $table->string('query_type', 255);
        });
    }
}
