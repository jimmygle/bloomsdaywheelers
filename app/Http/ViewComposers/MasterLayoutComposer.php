<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Configuration;
use Carbon\Carbon;

class MasterLayoutComposer
{
    protected $activeConfiguration;

    /**
     * Sets up the outside dependencies for this composer.
     * @param Configuration $configurationModel
     */
    public function __construct(Configuration $configurationModel)
    {
        $this->timeOfDayPreferences = config('registration-form.travelTimePreferences');
        $this->activeConfiguration = $configurationModel->where(['is_active_year' => true])->first();
    }

    /**
     * Set the global view parameters.
     * @param View $view
     */
    public function compose(View $view)
    {
        $bgColor = $this->activeConfiguration->bg_color;
        $readableBloomsdayDate = Carbon::createFromFormat('Y-m-d', $this->activeConfiguration->bloomsday_date)->format('F jS, Y');

        $view->with('bgColor', $bgColor)->with('readableBloomsdayDate', $readableBloomsdayDate);
    }
}