<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogMusics extends Migration
{
    public function up()
    {
        Schema::rename('mitchelljamieson_blog_music', 'mitchelljamieson_blog_musics');
    }
    
    public function down()
    {
        Schema::rename('mitchelljamieson_blog_musics', 'mitchelljamieson_blog_music');
    }
}
