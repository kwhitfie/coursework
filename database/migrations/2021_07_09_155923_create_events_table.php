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
            $table->string('event_name');
            $table->string('description');
            $table->string('location');
            $table->string('event_type');
            $table->datetime('start_time');
            $table->datetime('end_time');
        }
      );

    //   Schema::table('accounts', function (Blueprint $table) {
    //       $table->foreign('id');
    //       $table->timestamps();
    //       $table->string('forename');
    //       $table->string('surname');
    //       $table->string('email');
    //       $table->string('password');
    //       $table->string('account_type');
    //   }
    // );
    //
    //
    //     DB::table('accounts')->insert(
    //         array(
    //           'id' => 1,
    //           'forename' => "Vadim",
    //           'surname' => "Taranenko",
    //           'email' => "vadim@aston.ac.uk",
    //           'password' => "Ukraine123",
    //           'account_type' => "Student",
    //           )
    //         );
    //
    //         DB::table('accounts')->insert(
    //             array(
    //               'id' => 1,
    //               'forename' => "Kayley",
    //               'surname' => "Whitfield",
    //               'email' => "admin@aston.ac.uk",
    //               'password' => "admin",
    //               'account_type' => "Organiser",
    //               )
    //             );

        DB::table('events')->insert(
          array(
            'id' => 1,
            'event_name' => "Football club",
            'description' => "Footie with the lads",
            'location' => "Campus Gym",
            'event_type' => "Sport",
            'start_time' => '2020-07-09',
            'end_time' => '2020-07-09'
          )
        );

        DB::table('events')->insert(
          array(
            'id' => 2,
            'event_name' => "Biology Study",
            'description' => "Quick run through of unit 3",
            'location' => "Library",
            'event_type' => "Others",
            'start_time' => '2020-07-10',
            'end_time' => '2020-07-10'
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
