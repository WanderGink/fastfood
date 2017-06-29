<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use FastFood\Admin;

/**
*
*/
class AdminSeeder extends Seeder
{

	public function run()
	{
		Admin::create([
			'username' => 'tuanbaros',
			'password' => md5('thanhtuan'),	
			'nguoitao' => 'root'
		]);
	}
}

?>
