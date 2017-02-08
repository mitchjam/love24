<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSongs2 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_songs', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_songs', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
}
