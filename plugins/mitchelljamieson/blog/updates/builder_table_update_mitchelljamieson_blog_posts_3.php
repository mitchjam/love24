<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogPosts3 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->integer('video_author_id')->nullable();
            $table->dropColumn('video_author');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->dropColumn('video_author_id');
            $table->string('video_author', 255)->nullable();
        });
    }
}
