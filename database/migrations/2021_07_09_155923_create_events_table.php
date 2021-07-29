<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('location');
            $table->string('type');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->string('image', 256)->nullable();
            $table->bigInteger('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->bigInteger('interest')->default(0);
        }
      );


        DB::table('events')->insert(
          array(
            'id' => 1,
            'name' => "Football club",
            'description' => "Footie with the lads",
            'location' => "Campus Gym",
            'type' => "Sport",
            'start_time' => '2020-07-09',
            'end_time' => '2020-07-09',
            'userid' => 2,
            'image' => 'football.jpg',
          )
        );

        DB::table('events')->insert(
          array(
            'id' => 2,
            'name' => "Biology Study",
            'description' => "Quick run through of unit 3",
            'location' => "Library",
            'type' => "Others",
            'start_time' => '2020-07-10',
            'end_time' => '2020-07-10',
            'userid' => 2,
            'image' => 'flask.jpg',
          )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
        //Schema::dropIfExists('accounts');
    }
}
