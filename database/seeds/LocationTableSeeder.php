<?php

use Illuminate\Database\Seeder;
use App\location as location;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('locations')->insert([
	            'name' => $faker->city,
	            'place' => $faker->name
	        ]);
	} 
    }
}
?>

