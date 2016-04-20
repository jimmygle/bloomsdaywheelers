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

    public function __construct(Configuration $configurationModel)
    {
        $this->configurationModel = $configurationModel;
        $this->timeOfDayPreferences = config('registration-form.travelTimePreferences');
        $this->activeConfiguration = $this->configurationModel->where(['is_active_year' => true])->first();

        if ($this->activeConfiguration !== null) {
            $this->bloomsdayDate = Carbon::createFromFormat('Y-m-d', $this->activeConfiguration['bloomsday_date']);
        }
    }

    public function compose(View $view)
    {
        $this->view = $view;
        $this->setDesiredAirArrivalOptions();
        $this->setDesiredAirDepartureOptions();
        $this->setCarArrivalInSpokane();
        $this->setCarDepartureFromSpokane();
    }

    protected function setDesiredAirArrivalOptions()
    {
        $currentDay = $this->bloomsdayDate->subDays(2);

        $preferredArrivalOptions = [];
        for ($i=0; $i<static::ARRIVAL_DAYS_BEFORE_BLOOMSDAY; $i++) {
            foreach ($this->timeOfDayPreferences as $timeOfDayPreferenceValue => $timeOfDayPreferenceLabel) {
                $preferredArrivalOptions[$currentDay->format('Y-m-d') . ';' . $timeOfDayPreferenceValue] = $currentDay->format('l, F jS') . ' - ' . $timeOfDayPreferenceLabel;
            }
            $currentDay->addDay();
        }

        $this->view->with('airDesiredArrival', $preferredArrivalOptions);
    }

    protected function setDesiredAirDepartureOptions()
    {
        $bloomsdayDate = $this->bloomsdayDate->format('Y-m-d');
        $currentDay = $this->bloomsdayDate;

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
     * Sets view variable for car arrival in Spokane.
     * @return void
     */
    protected function setCarArrivalInSpokane()
    {
        $currentDay = $this->bloomsdayDate;
        $currentDay->subDays(2);

        $carArrivalInSpokane = [];
        for ($i=0; $i<static::ARRIVAL_DAYS_BEFORE_BLOOMSDAY; $i++) {
            $carArrivalInSpokane[$currentDay->format('Y-m-d')] = $currentDay->format('l, F jS');
            $currentDay->addDay();
        }

        $this->view->with('carArrivalInSpokane', $carArrivalInSpokane);
    }

    protected function setCarDepartureFromSpokane()
    {
        $currentDay = $this->bloomsdayDate;

        $carDepartureFromSpokane = [];
        for ($i=0; $i<static::DEPARTURE_DAYS_AFTER_BLOOMSDAY; $i++) {
            $carDepartureFromSpokane[$currentDay->format('Y-m-d')] = $currentDay->format('l, F jS');
            $currentDay->addDay();
        }

        $this->view->with('carDepartureFromSpokane', $carDepartureFromSpokane);
    }


}