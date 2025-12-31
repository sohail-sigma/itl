<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanSwisssummercampaign extends Migration
{
    public function up()
    {
        Schema::create('san_san_swisssummercampaign', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('nationality');
            $table->string('countrycode');
            $table->string('mobile');
            $table->string('country');
            $table->string('city');
            $table->string('language');
            $table->string('comments');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_swisssummercampaign');
    }
}
