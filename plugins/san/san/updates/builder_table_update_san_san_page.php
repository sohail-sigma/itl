<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanPage extends Migration
{
    public function up()
    {
        Schema::table('san_san_page', function($table)
        {
            $table->renameColumn('slider_type', 'banner_slider');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_page', function($table)
        {
            $table->renameColumn('banner_slider', 'slider_type');
        });
    }
}
