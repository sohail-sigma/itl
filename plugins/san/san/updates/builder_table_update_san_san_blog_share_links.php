<?php namespace san\San\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSanSanBlogShareLinks extends Migration
{
    public function up()
    {
        Schema::table('san_san_blog_share_links', function($table)
        {
            $table->integer('sort_order');
            $table->dropColumn('icon_link');
        });
    }
    
    public function down()
    {
        Schema::table('san_san_blog_share_links', function($table)
        {
            $table->dropColumn('sort_order');
            $table->string('icon_link', 191);
        });
    }
}
