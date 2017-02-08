<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogPosts4 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->integer('music_list_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->dropColumn('music_list_id');
        });
    }
}
