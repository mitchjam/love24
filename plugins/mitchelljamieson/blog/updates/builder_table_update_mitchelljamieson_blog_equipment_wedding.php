<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogEquipmentWedding extends Migration
{
    public function up()
    {
        Schema::rename('mitchelljamieson_blog_equipment_post', 'mitchelljamieson_blog_equipment_wedding');
    }
    
    public function down()
    {
        Schema::rename('mitchelljamieson_blog_equipment_wedding', 'mitchelljamieson_blog_equipment_post');
    }
}
