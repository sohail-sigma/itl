<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSanSanBlogShareLinks extends Migration
{
    public function up()
    {
        Schema::create('san_san_blog_share_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('icon_link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('san_san_blog_share_links');
    }
}
