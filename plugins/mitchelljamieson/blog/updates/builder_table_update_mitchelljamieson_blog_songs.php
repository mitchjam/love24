<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSongs extends Migration
{
    public function up()
    {
        Schema::rename('mitchelljamieson_blog_musics', 'mitchelljamieson_blog_songs');
    }
    
    public function down()
    {
        Schema::rename('mitchelljamieson_blog_songs', 'mitchelljamieson_blog_musics');
    }
}
