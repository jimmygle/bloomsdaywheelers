<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationTable extends Migration
{
    /**
     * Create the configuration table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration', function (Blueprint $table) {

            $table->integer('bloomsday_year')->unsigned()->unique();
            $table->boolean('is_active_year');
            $table->date('bloomsday_date');
            $table->boolean('registration_enabled');
            $table->text('registration_disabled_message');

            $table->timestamps();
            $table->softDeletes();
            $table->primary('bloomsday_year');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configuration');
    }
}
