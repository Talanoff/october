<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMovies3 extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
