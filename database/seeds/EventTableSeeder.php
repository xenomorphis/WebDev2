<?php

use Illuminate\Database\Seeder;
use App\event as event;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('events')->insert([
	            'name' => $faker->name,
	            'eventDate' => $faker->date,
                'location_id' => $faker->numberBetween(1,10),
                'concert_id' => $faker->numberBetween(1,10)
	        ]);
	} 

    }
}

