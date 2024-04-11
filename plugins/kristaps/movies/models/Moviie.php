<?php namespace Kristaps\Movies\Models;

use Model;

/**
 * Model
 */
class Moviie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'kristaps_movies_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /* relations */


    public $belongsToMany=[
        'genres' => [

          'Kristaps\Movies\Models\Genre',
          'table' => 'kristaps_movies_movies_genres',

          'order' => 'genre_title'

        ]
    ];
        


    public $attachOne =[
        'poster' => 'System\Models\File'
    ];
        
    


    public $attachMany =[
        'movie_gallery' => 'System\Models\File'
    ];
        
}


