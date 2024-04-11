<?php namespace Kristaps\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKristapsMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::table('kristaps_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['movie_id','genre_id']);
            $table->renameColumn('movie_id', 'moviie_id');
            $table->primary(['moviie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('kristaps_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['moviie_id','genre_id']);
            $table->renameColumn('moviie_id', 'movie_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
}
