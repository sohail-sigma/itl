<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanDestinations3 extends Migration
{
    public function up()
    {
        Schema::table('san_san_destinations', function($table)
        {
            $table->text('iframe')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('san_san_destinations', function($table)
        {
            $table->text('iframe')->nullable(false)->change();
        });
    }
}
