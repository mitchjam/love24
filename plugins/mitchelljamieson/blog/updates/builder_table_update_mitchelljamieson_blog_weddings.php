<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogWeddings extends Migration
{
    public function up()
    {
        Schema::rename('mitchelljamieson_blog_posts', 'mitchelljamieson_blog_weddings');
    }
    
    public function down()
    {
        Schema::rename('mitchelljamieson_blog_weddings', 'mitchelljamieson_blog_posts');
    }
}
