<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanContactForm extends Migration
{
    public function up()
    {
        Schema::create('san_san_contact_form', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_contact_form');
    }
}
