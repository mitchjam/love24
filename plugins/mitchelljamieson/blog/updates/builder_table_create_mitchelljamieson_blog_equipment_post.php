<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogEquipmentPost extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_equipment_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('equipment_id')->nullable();
            $table->integer('post_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_equipment_post');
    }
}
