<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogStudios extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_studios', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_studios');
    }
}
