<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSubmissions2 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_submissions', function($table)
        {
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_submissions', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
