<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use FastFood\Product;

/**
* 
*/
class ProductSeeder extends Seeder
{
	
	public function run()
	{
		$faker = Faker\Factory::create();
		$array = array('food', 'abstract', 'animals', 'cats', 'business', 'city', 'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport');
		for($i=0; $i<23;++$i){
			$random = $faker->randomElement($array);
			Product::create([
				'Pname' => $faker->word.' '.$faker->word.'a',
				'Category' => 'My-Y',
				'Pcost' => $faker->numberBetween($min = 1, $max = 200),
				'Ptotal' => $faker->numberBetween($min = 100, $max = 200),
				'Pnow' => $faker->numberBetween($min = 1, $max = 99),
				'Pdes' => implode('',$faker->sentences(100)),
				'Plink' => $faker->imageUrl($width = 640, $height = 480, 'food')
			]);
		}
	}
}

?>