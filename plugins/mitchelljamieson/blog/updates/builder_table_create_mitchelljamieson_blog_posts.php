<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogPosts extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->string('video_url')->nullable();
            $table->text('body')->nullable();
            $table->string('title')->nullable();
            $table->string('video_author')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_posts');
    }
}
