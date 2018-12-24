<?php namespace Impressionbureau\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'impressionbureau_movies_genres_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
