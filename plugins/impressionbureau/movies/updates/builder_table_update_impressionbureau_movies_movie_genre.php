<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMoviesMovieGenre extends Migration
{
    public function up()
    {
        Schema::rename('impressionbureau_movies_genres', 'impressionbureau_movies_movie_genre');
        Schema::table('impressionbureau_movies_movie_genre', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::rename('impressionbureau_movies_movie_genre', 'impressionbureau_movies_genres');
        Schema::table('impressionbureau_movies_genres', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
}
