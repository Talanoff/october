<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMoviesActors extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_actors', function($table)
        {
            $table->string('slug');
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_actors', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
