<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogMusic extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_music', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('artist')->nullable();
            $table->string('link')->nullable();
            $table->string('music_provider')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_music');
    }
}
