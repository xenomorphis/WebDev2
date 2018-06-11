<?php

use Illuminate\Database\Seeder;
use App\artist_concert as artist_concert;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Artist_ConcertTableSeeder extends Seeder
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
	        DB::table('artist_concert')->insert([
	            'artist_id' => $faker->numberBetween(1,10),
	            'concert_id' => $faker->numberBetween(1,10)
	        ]);
	} 
    }
}
