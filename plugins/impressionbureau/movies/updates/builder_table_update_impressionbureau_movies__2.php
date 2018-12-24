<?php namespace Impressionbureau\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateImpressionbureauMovies2 extends Migration
{
    public function up()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->string('poster')->nullable();
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('impressionbureau_movies_', function($table)
        {
            $table->dropColumn('poster');
            $table->string('title', 191)->change();
        });
    }
}
