<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMitchelljamiesonBlogEquipments extends Migration
{
    public function up()
    {
        Schema::create('mitchelljamieson_blog_equipments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('brand')->nullable();
            $table->string('name')->nullable();
            $table->string('affiliate_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mitchelljamieson_blog_equipments');
    }
}
