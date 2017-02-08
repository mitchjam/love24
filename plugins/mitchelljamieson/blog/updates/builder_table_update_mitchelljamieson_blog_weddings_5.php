<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogWeddings5 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->dateTime('published_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->dropColumn('published_at');
        });
    }
}
