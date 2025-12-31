<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanServicesEnquiry extends Migration
{
    public function up()
    {
        Schema::create('san_san_services_enquiry', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('area_of_interest', 256)->nullable();
            $table->string('first_name', 256)->nullable();
            $table->string('last_name', 256)->nullable();
            $table->string('email', 256)->nullable();
            $table->string('c_name', 256)->nullable();
            $table->string('designation', 256)->nullable();
            $table->string('phone', 256)->nullable();
            $table->string('country', 256)->nullable();
            $table->string('city', 256)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_services_enquiry');
    }
}
