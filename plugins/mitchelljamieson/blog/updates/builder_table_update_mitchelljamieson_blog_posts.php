<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->integer('equipment_list_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->dropColumn('equipment_list_id');
        });
    }
}
