<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSongs3 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_songs', function($table)
        {
            $table->renameColumn('music_provider', 'provider');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_songs', function($table)
        {
            $table->renameColumn('provider', 'music_provider');
        });
    }
}
