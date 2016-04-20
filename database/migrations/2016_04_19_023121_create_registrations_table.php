<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Create registrations table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->integer('bloomsday_year')->unsigned();
            $table->string('status');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->char('country_abbreviation', 3);
            $table->string('phone');
            $table->string('email');
            $table->string('birth_date');
            $table->enum('gender', ['m', 'f']);
            $table->enum('shirt_size', ['ym','yl','s','m','l','xl','xxl']);
            $table->enum('travel_method', ['air', 'car']);
            $table->string('air_whos_booking')->nullable();
            $table->string('air_home_airport')->nullable();
            $table->date('air_arrival_date')->nullable();
            $table->enum('air_arrival_preference', ['morning', 'afternoon', 'evening'])->nullable();
            $table->date('air_departure_date')->nullable();
            $table->enum('air_departure_preference', ['morning', 'afternoon', 'evening'])->nullable();
            $table->date('car_arrival_date')->nullable();
            $table->date('car_departure_date')->nullable();
            $table->string('car_mileage')->nullable();
            $table->text('travel_comments')->nullable();
            $table->enum('division', ["Women - Juniors", "Men - Juniors", "Women - Open", "Men - Open", "Men - Masters", "T51 Quad", "T52 Quad"]);
            $table->boolean('bloomsday_rookie');
            $table->text('roommate_preference')->nullable();
            $table->text('general_comments')->nullable();
            $table->text('coordinator_notes')->nullable();

            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('bloomsday_year')->references('bloomsday_year')->on('configuration')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registrations');
    }
}
