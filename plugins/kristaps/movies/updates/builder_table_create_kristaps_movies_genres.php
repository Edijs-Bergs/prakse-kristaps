<?php namespace Kristaps\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKristapsMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('kristaps_movies_genres', function($table)
        {
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kristaps_movies_genres');
    }
}
