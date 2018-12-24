<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMovies4 extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->integer('genre_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->dropColumn('genre_id');
        });
    }
}
