<?php namespace SureSoftware\WebAlert\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;

class Alert extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Alert Component',
            'description' => 'Displays the site wide alerts'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    // This array becomes available on the page as {{ bookingForm.products }}
    public function alerts()
    {
        return \SureSoftware\WebAlert\Models\Alert::whereNull('finish')
            ->orWhere('finish', '>', Carbon::now())
            ->get();
    }
}
