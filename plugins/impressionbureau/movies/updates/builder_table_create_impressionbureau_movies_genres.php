<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpressionbureauMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('impressionbureau_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('movie_id')->unsigned();
            $table->integer('genre_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impressionbureau_movies_genres');
    }
}
