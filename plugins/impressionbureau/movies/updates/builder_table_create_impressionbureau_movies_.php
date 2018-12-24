<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateImpressionbureauMovies extends Migration
{
    public function up()
    {
        Schema::create('impressionbureau_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('year')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('impressionbureau_movies_');
    }
}
