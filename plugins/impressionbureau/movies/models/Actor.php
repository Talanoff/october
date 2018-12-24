<?php namespace Impressionbureau\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'impressionbureau_movies_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

	public $belongsToMany = [
		'movies' => [
			Movie::class,
			'table' => 'impressionbureau_movies_actor_movie'
		]
	];
}
