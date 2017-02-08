<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogPosts7 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->dateTime('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->dropColumn('updated_at');
        });
    }
}
