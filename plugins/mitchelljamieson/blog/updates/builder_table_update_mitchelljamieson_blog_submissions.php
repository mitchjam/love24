<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSubmissions extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_submissions', function($table)
        {
            $table->string('video_url');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_submissions', function($table)
        {
            $table->dropColumn('video_url');
        });
    }
}
