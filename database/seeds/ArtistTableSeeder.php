<?php

use Illuminate\Database\Seeder;
use App\artist as artist;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArtistTableSeeder extends Seeder
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
	        DB::table('artists')->insert([
	            'name' => $faker->name,
	            'genre' => $faker->word
	        ]);
	} 
    }
}
?>
