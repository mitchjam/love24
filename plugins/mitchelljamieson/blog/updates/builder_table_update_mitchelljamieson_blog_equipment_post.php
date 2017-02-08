<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogEquipmentPost extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_equipment_post', function($table)
        {
            $table->primary(['post_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_equipment_post', function($table)
        {
            $table->dropPrimary(['post_id']);
        });
    }
}
