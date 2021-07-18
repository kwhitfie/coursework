<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('account_type')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

          DB::table('users')->insert(
                array(
                  'id' => 1,
                  'name' => "Vadim Taranenko",
                  'email' => "vadim@aston.ac.uk",
                  'password' => Hash::make("Ukraine123"),
                  'account_type' => 0,
                  )
                );

              DB::table('users')->insert(
                    array(
                      'id' => 2,
                      'name' => "Kayley Whitfield",
                      'email' => "admin@aston.ac.uk",
                      'password' => Hash::make("admin"),
                      'account_type' => 1,
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
        Schema::dropIfExists('users');
    }
}
