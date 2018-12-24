<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMovies6 extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->dropColumn('poster');
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->string('poster', 191)->nullable();
        });
    }
}
