<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogPosts6 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->dropColumn('equipment_list_id');
            $table->dropColumn('music_list_id');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_posts', function($table)
        {
            $table->integer('equipment_list_id')->nullable();
            $table->integer('music_list_id')->nullable();
        });
    }
}
