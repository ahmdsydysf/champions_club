<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\SliderImage;
use App\Models\Sport;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomePageController extends Controller
{
    public function index(){
        $sliderData = SliderImage::all();
        $aboutUs = Company::find(1);
        $sports = Sport::all();

        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('welcome' , get_defined_vars());
        }else{
            return view('welcome_ar' , get_defined_vars());
        }

    }
}
