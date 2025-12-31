<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanSlider extends Migration
{
    public function up()
    {
        Schema::table('san_san_slider', function($table)
        {
            $table->text('description');
            $table->dropColumn('bg_image');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_slider', function($table)
        {
            $table->dropColumn('description');
            $table->string('bg_image', 256);
        });
    }
}
