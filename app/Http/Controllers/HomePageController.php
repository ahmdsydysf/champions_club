<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Counter;
use App\Models\Cup;
use App\Models\NewsEvent;
use App\Models\Service;
use App\Models\SliderImage;
use App\Models\Sponsor;
use App\Models\Sport;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomePageController extends Controller
{
    public function index(){
        $sliderData = SliderImage::all();
        $aboutUs = Company::find(1);
        $sports = Sport::all();
        $cups = Cup::all();
        $services = Service::all();
        $news = NewsEvent::all();
        $sponsors = Sponsor::all();
        $counter = Counter::all();
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('welcome' , get_defined_vars());
        }else{
            return view('welcome_ar' , get_defined_vars());
        }

    }
}
