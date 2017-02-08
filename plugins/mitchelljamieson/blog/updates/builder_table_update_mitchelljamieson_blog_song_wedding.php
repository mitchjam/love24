<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSongWedding extends Migration
{
    public function up()
    {
        Schema::rename('mitchelljamieson_blog_music_wedding', 'mitchelljamieson_blog_song_wedding');
        Schema::table('mitchelljamieson_blog_song_wedding', function($table)
        {
            $table->renameColumn('music_id', 'song_id');
        });
    }
    
    public function down()
    {
        Schema::rename('mitchelljamieson_blog_song_wedding', 'mitchelljamieson_blog_music_wedding');
        Schema::table('mitchelljamieson_blog_music_wedding', function($table)
        {
            $table->renameColumn('song_id', 'music_id');
        });
    }
}
