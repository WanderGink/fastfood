<?php namespace FastFood;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

	protected $primaryKey = 'Aid';

	protected $table = 'admins';

	protected $fillable = [
		'Aid',
		'username',
		'password',
		'nguoitao'
	];

}