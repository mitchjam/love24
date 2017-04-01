<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogEquipmentWedding3 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_equipment_wedding', function($table)
        {
            $table->dropPrimary(['wedding_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_equipment_wedding', function($table)
        {
            $table->primary(['wedding_id']);
        });
    }
}
