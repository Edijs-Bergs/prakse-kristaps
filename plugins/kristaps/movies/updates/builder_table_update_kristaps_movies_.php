<?php namespace Kristaps\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKristapsMovies extends Migration
{
    public function up()
    {
        Schema::table('kristaps_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kristaps_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
