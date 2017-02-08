<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogWeddings2 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->renameColumn('user_id', 'author_id');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_weddings', function($table)
        {
            $table->renameColumn('author_id', 'user_id');
        });
    }
}
