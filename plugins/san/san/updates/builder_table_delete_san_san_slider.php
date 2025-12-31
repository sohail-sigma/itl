<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableDeleteSanSanSlider extends Migration
{
    public function up()
    {
        Schema::dropIfExists('san_san_slider');
    }
    
    public function down()
    {
        Schema::create('san_san_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('bg_image', 256);
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }
}
