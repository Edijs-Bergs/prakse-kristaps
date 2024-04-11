<?php namespace Kristaps\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKristapsMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('kristaps_movies_movies_genres', function($table)
        {
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kristaps_movies_movies_genres');
    }
}
