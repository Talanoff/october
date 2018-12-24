<?php namespace Impressionbureau\Movies\Models;

use Model;
use System\Models\File;

/**
 * Model
 */
class Movie extends Model
{
	use \October\Rain\Database\Traits\Validation;


	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'impressionbureau_movies_';

	/**
	 * @var array Validation rules
	 */
	public $rules = [
	];

	/* Relations */
	public $attachOne = [
		'poster' => File::class,
	];

	public $attachMany = [
		'previews' => File::class,
	];

	public $belongsToMany = [
		'genres' => [
			Genre::class,
			'table' => 'impressionbureau_movies_movie_genre',
		],
		'actors' => [
			Actor::class,
			'table' => 'impressionbureau_movies_actor_movie'
		]
	];
}
