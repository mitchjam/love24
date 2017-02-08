<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogMusicPost extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_music_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('post_id')->nullable();
            $table->integer('music_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_music_post');
    }
}
