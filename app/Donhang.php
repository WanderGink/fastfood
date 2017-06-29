<?php namespace FastFood;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model {

	protected $primaryKey = 'Did';

	protected $table = 'donhangs';

	protected $fillable = [
		'status',
		'Pname',
		'Pid',
		'Pcost',
		'amount',
		'total',
		'Uid'
	];

}
