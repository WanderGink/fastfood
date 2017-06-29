<?php namespace FastFood;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model {

	protected $primaryKey = 'Gid';

	protected $table = 'guests';

	protected $fillable = [
		'Gid', 'name', 'address', 'phone',
		'status','Pname','Pcost', 'Pid', 'Pcost', 'amount', 'total'
	];

}
