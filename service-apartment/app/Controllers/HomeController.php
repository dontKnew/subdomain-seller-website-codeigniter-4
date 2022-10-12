<?php

namespace App\Controllers;

use App\Models\ApartmentModel;
use App\Models\ApartmentStateModel;
use App\Models\HighlightApartmentModel;
use App\Models\HomeSliderModel;

class HomeController extends BaseController
{
    public function index()
    {
        /*state find*/
        $state = new ApartmentStateModel();
        $state =$state->orderBy("id","DESC")->limit(3   )->find();


        /*get sliders*/
        $slider = new HomeSliderModel();
        $slider = $slider->where("status", "Public")->orderBy("id", "DESC")->findAll();

        /*get highlight apartments*/
        $highlight = new HighlightApartmentModel();
        $highlight = $highlight->where("status", "Public")->orderBy("id","DESC")->findAll();
        foreach($highlight as $key=>$value){
            $apartment = new ApartmentModel();
            $apartment = $apartment->where("id", $value['service_apartment_id'])->find();
            $highlight[$key] = $apartment;
        }
        /* all apartments*/
        $apartment = new ApartmentModel();
        $apartment = $apartment->where("status", "Public")->orderBy("id", "DESC")->findAll();
        $data = [
            "state"=>$state,
            "home"=>"active",
            "slider"=>$slider,
            "highlight"=>$highlight,
            "apartment"=>$apartment
        ];
        return view('home', $data);
    }
}
