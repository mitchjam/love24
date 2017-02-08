<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogWeddings3 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->renameColumn('body', 'review');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->renameColumn('review', 'body');
        });
    }
}
