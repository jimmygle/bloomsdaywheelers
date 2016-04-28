<?php

use Illuminate\Database\Seeder;
use App\Configuration;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds for populating configurations.
     *
     * @return void
     */
    public function run()
    {
        Configuration::insert([
            'bloomsday_year' => 2016,
            'is_active_year' => true,
            'bloomsday_date' => '2016-05-01',
            'registration_enabled' => true
        ]);
    }
}
