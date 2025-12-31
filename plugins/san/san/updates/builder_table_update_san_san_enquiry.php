<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanEnquiry extends Migration
{
    public function up()
    {
        Schema::table('san_san_enquiry', function($table)
        {
            $table->text('query_data');
            $table->string('query_type', 255);
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('subject');
            $table->dropColumn('message');
            $table->dropColumn('ip');
            $table->dropColumn('subscription');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_enquiry', function($table)
        {
            $table->dropColumn('query_data');
            $table->dropColumn('query_type');
            $table->string('name', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('subject', 191)->nullable();
            $table->text('message')->nullable();
            $table->string('ip', 191)->nullable();
            $table->boolean('subscription')->nullable();
        });
    }
}
