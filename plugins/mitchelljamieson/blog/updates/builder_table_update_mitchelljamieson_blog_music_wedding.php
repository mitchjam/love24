<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogMusicWedding extends Migration
{
    public function up()
    {
        Schema::rename('mitchelljamieson_blog_music_post', 'mitchelljamieson_blog_music_wedding');
        Schema::table('mitchelljamieson_blog_music_wedding', function($table)
        {
            $table->renameColumn('post_id', 'wedding_id');
        });
    }
    
    public function down()
    {
        Schema::rename('mitchelljamieson_blog_music_wedding', 'mitchelljamieson_blog_music_post');
        Schema::table('mitchelljamieson_blog_music_post', function($table)
        {
            $table->renameColumn('wedding_id', 'post_id');
        });
    }
}
