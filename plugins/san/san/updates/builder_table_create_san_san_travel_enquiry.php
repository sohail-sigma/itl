<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanTravelEnquiry extends Migration
{
    public function up()
    {
        Schema::create('san_san_travel_enquiry', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('c_name');
            $table->string('designation');
            $table->string('phone');
            $table->string('country');
            $table->string('interest')->nullable();
            $table->string('i_am_a')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_travel_enquiry');
    }
}
