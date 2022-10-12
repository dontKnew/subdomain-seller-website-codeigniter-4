<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApartmentModel;
use App\Models\ApartmentStateModel;
use App\Models\HighlightApartmentModel;
use App\Models\HomeSliderModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $apartment = new ApartmentModel();
        $state = new ApartmentStateModel();
        $highlight = new HighlightApartmentModel();
        $slider = new HomeSliderModel();

        $data = array(
            "dashboard"=>"active",
            'apartment'=>count($apartment->findAll()),
            'state'=>count($state->findAll()),
            'slider'=>count($slider->findAll()),
            'highlight'=>count($highlight->findAll()),
        );
        return view("admin/dashboard", $data);
    }
}
