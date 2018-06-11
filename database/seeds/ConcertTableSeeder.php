<?php

use Illuminate\Database\Seeder;
use App\concert as concert;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConcertTableSeeder extends Seeder
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
	        DB::table('concerts')->insert([
	            'name' => $faker->name,
	            'description' => $faker->paragraph,
//                'event_id' => $faker->numberBetween(1,10),
//                'location_id'=> $faker->numberBetween(1,10),
//                'artist_id'=> $faker->numberBetween(1,10)
	        ]);
	} 
    }
}


