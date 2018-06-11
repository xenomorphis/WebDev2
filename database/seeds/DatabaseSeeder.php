<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        Model::unguard();
        
        $this->call('ArtistTableSeeder');
        $this->call('ConcertTableSeeder');
        $this->call('LocationTableSeeder');
        $this->call('EventTableSeeder');
        $this->call('TicketTableSeeder');
        $this->call('Artist_ConcertTableSeeder');
    }
}
