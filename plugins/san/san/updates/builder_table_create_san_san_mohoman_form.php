<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanMohomanForm extends Migration
{
    public function up()
    {
        Schema::create('san_san_mohoman_form', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('salutation', 50)->nullable();
            $table->string('full_name', 255);
            $table->string('email', 255);
            $table->string('country_code', 10)->nullable();
            $table->string('mobile', 20);
            $table->string('country', 100);
            $table->string('city', 100);
            $table->string('nationality', 100);
            $table->string('language', 100);
            $table->text('cruiselines')->nullable();
            $table->boolean('confirm');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_mohoman_form');
    }
}
