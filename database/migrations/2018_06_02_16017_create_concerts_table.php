<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->string('name', 150);
            $table->text('description');
            
        });
        
        Schema::create('artist_concert', function (Blueprint $table) {
            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            
            $table->integer('concert_id')->unsigned()->index();
            $table->foreign('concert_id')->references('id')->on('concerts')->onDelete('cascade');
            
            $table->timestamps();
        });
        
//        Schema::create('concert_location', function (Blueprint $table) {
//            $table->integer('location_id')->unsigned()->index();
//            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
//            
//            $table->integer('concert_id')->unsigned()->index();
//            $table->foreign('concert_id')->references('id')->on('concerts')->onDelete('cascade');
//            
//            $table->timestamps();
//        });
        

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerts');
        Schema::dropIfExists('artist_concert');
        Schema::dropIfExists('concert_location');
        Schema::dropIfExists('event');
    }
}
