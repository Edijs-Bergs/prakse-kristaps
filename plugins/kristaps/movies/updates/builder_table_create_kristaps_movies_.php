<?php namespace Kristaps\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKristapsMovies extends Migration
{
    public function up()
    {
        Schema::create('kristaps_movies_', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kristaps_movies_');
    }
}
