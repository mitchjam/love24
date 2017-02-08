<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogEquipmentWedding2 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_equipment_wedding', function($table)
        {
            $table->dropPrimary(['post_id']);
            $table->renameColumn('post_id', 'wedding_id');
            $table->primary(['wedding_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_equipment_wedding', function($table)
        {
            $table->dropPrimary(['wedding_id']);
            $table->renameColumn('wedding_id', 'post_id');
            $table->primary(['post_id']);
        });
    }
}
