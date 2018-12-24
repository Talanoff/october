<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMoviesMovieGenre2 extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_movie_genre', function($table)
        {
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_movie_genre', function($table)
        {
            $table->dropPrimary(['movie_id','genre_id']);
        });
    }
}
