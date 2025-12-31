<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanPackageEnquiry extends Migration
{
    public function up()
    {
        Schema::create('san_san_package_enquiry', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('pacage');
            $table->string('experiences');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('nationality');
            $table->integer('no_traveller');
            $table->string('departure_from');
            $table->string('when_start');
            $table->string('how_long');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_package_enquiry');
    }
}
