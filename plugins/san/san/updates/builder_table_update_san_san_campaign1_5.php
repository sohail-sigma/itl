<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanCampaign15 extends Migration
{
    public function up()
    {
        Schema::table('san_san_campaign1', function($table)
        {
            $table->text('salutation');
            $table->integer('country_code');
            $table->text('phone');
            $table->text('country');
            $table->text('city');
            $table->text('nationality');
            $table->text('language');
            $table->text('comments');
            $table->text('fname')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('email')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('lname');
            $table->dropColumn('telephone');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_campaign1', function($table)
        {
            $table->dropColumn('salutation');
            $table->dropColumn('country_code');
            $table->dropColumn('phone');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('nationality');
            $table->dropColumn('language');
            $table->dropColumn('comments');
            $table->string('fname', 191)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('email', 191)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('lname', 191);
            $table->string('telephone', 191);
        });
    }
}
