<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogSubmissions extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_submissions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('studio_id');
            $table->string('email');
            $table->string('music');
            $table->text('equipment')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_submissions');
    }
}
