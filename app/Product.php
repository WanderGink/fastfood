<?php namespace FastFood;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $primaryKey = 'Pid';

	protected $table = 'products';

	protected $fillable = [
		'Pid',
		'Pname',
		'Category',
		'Pcost',
		'Ptotal',
		'Pnow',
		'Pdes',
		'Plink'
	];

}
