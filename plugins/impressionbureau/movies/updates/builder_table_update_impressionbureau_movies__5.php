<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMovies5 extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->dropColumn('genre_id');
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->integer('genre_id')->unsigned();
        });
    }
}
