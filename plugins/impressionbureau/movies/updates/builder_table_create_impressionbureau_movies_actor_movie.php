<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpressionbureauMoviesActorMovie extends Migration
{
    public function up()
    {
        Schema::create('impressionbureau_movies_actor_movie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('actor_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->primary(['actor_id','movie_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impressionbureau_movies_actor_movie');
    }
}
