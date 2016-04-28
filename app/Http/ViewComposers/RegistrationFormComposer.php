<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Configuration;
use Carbon\Carbon;

class RegistrationFormComposer
{
    protected $configurationModel;
    protected $view;
    protected $activeConfiguration;
    protected $timeOfDayPreferences;
    protected $bloomsdayDate;

    const ARRIVAL_DAYS_BEFORE_BLOOMSDAY = 2;
    const DEPARTURE_DAYS_AFTER_BLOOMSDAY = 2;

    /**
     * Sets up the outside dependencies for this composer.
     * @param Configuration $configurationModel
     */
    public function __construct(Configuration $configurationModel)
    {
        $this->configurationModel = $configurationModel;
        $this->timeOfDayPreferences = config('registration-form.travelTimePreferences');
        $this->activeConfiguration = $this->configurationModel->where(['is_active_year' => true])->first();

        if ($this->activeConfiguration !== null) {
            $this->bloomsdayDate = Carbon::createFromFormat('Y-m-d', $this->activeConfiguration['bloomsday_date']);
        }
    }

    /**
     * Called to perform the view modification.
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->view = $view;
        $this->setDesiredAirArrivalOptions();
        $this->setDesiredAirDepartureOptions();
        $this->setCarArrivalInSpokane();
        $this->setCarDepartureFromSpokane();
    }

    /**
     * Determines the air arrival date options based on the Bloomsday date.
     * @return void
     */
    protected function setDesiredAirArrivalOptions()
    {
        $currentDay = clone $this->bloomsdayDate;
        $currentDay->subDays(2);

        $preferredArrivalOptions = [];
        for ($i=0; $i<static::ARRIVAL_DAYS_BEFORE_BLOOMSDAY; $i++) {
            foreach ($this->timeOfDayPreferences as $timeOfDayPreferenceValue => $timeOfDayPreferenceLabel) {
                $preferredArrivalOptions[$currentDay->format('Y-m-d') . ';' . $timeOfDayPreferenceValue] = $currentDay->format('l, F jS') . ' - ' . $timeOfDayPreferenceLabel;
            }
            $currentDay->addDay();
        }

        $this->view->with('airDesiredArrival', $preferredArrivalOptions);
    }

    /**
     * Determines the air departure date options based on the Bloomsday date.
     * @return void
     */
    protected function setDesiredAirDepartureOptions()
    {
        $bloomsdayDate = $this->bloomsdayDate->format('Y-m-d');
        $currentDay = clone $this->bloomsdayDate;

        $preferredDepartureOptions = [];
        for ($i=0; $i<static::DEPARTURE_DAYS_AFTER_BLOOMSDAY; $i++) {
            foreach ($this->timeOfDayPreferences as $timeOfDayPreferenceValue => $timeOfDayPreferenceLabel) {
                if ($currentDay->format('Y-m-d') == $bloomsdayDate && in_array($timeOfDayPreferenceValue, ['morning'])) {
                    continue;
                }
                $preferredDepartureOptions[$currentDay->format('Y-m-d') . ';' . $timeOfDayPreferenceValue] = $currentDay->format('l, F jS') . ' - ' . $timeOfDayPreferenceLabel;
            }
            $currentDay->addDay();
        }

        $this->view->with('airDesiredDeparture', $preferredDepartureOptions);
    }

    /**
     * Determines the car arrival date options based on the Bloomsday date.
     * @return void
     */
    protected function setCarArrivalInSpokane()
    {
        $currentDay = clone $this->bloomsdayDate;
        $currentDay->subDays(2);

        $carArrivalInSpokane = [];
        for ($i=0; $i<static::ARRIVAL_DAYS_BEFORE_BLOOMSDAY; $i++) {
            $carArrivalInSpokane[$currentDay->format('Y-m-d')] = $currentDay->format('l, F jS');
            $currentDay->addDay();
        }

        $this->view->with('carArrivalInSpokane', $carArrivalInSpokane);
    }

    /**
     * Determines the car departure date options based on the Bloomsday date.
     * @return void
     */
    protected function setCarDepartureFromSpokane()
    {
        $currentDay = clone $this->bloomsdayDate;

        $carDepartureFromSpokane = [];
        for ($i=0; $i<static::DEPARTURE_DAYS_AFTER_BLOOMSDAY; $i++) {
            $carDepartureFromSpokane[$currentDay->format('Y-m-d')] = $currentDay->format('l, F jS');
            $currentDay->addDay();
        }

        $this->view->with('carDepartureFromSpokane', $carDepartureFromSpokane);
    }


}