<?php namespace MitchellJamieson\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMitchelljamiesonBlogSubmissions3 extends Migration
{
    public function up()
    {
        Schema::table('mitchelljamieson_blog_submissions', function($table)
        {
            $table->string('studio', 255);
            $table->text('comments')->nullable();
            $table->dropColumn('studio_id');
        });
    }
    
    public function down()
    {
        Schema::table('mitchelljamieson_blog_submissions', function($table)
        {
            $table->dropColumn('studio');
            $table->dropColumn('comments');
            $table->integer('studio_id');
        });
    }
}
