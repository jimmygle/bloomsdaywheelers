<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrantPastResultsTable extends Migration
{
    /**
     * Create registrants past results table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrant_past_results', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->integer('registration_id')->unsigned();
            $table->integer('year')->unsigned();
            $table->string('name');
            $table->string('distance');
            $table->string('time');
            $table->string('position');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registrant_past_results');
    }
}
