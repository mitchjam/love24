<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogWeddings4 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->boolean('from_old_site')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->dropColumn('from_old_site');
        });
    }
}
