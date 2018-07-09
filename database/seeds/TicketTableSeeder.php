<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\ticket as ticket;
use Faker\Factory as Faker;

class TicketTableSeeder extends Seeder
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
	        DB::table('tickets')->insert([
	            'category' => $faker->numberBetween(1,10),
	            'catDescription' => $faker->word,
	            'available' => $faker->numberBetween(0,1),
                'reserved' => $faker->numberBetween(0,1),
                'event_id' => $faker->numberBetween(1,10),
                'user_id' => $faker->numberBetween(1,10)
	        ]);
	} 
    }
}
?>

