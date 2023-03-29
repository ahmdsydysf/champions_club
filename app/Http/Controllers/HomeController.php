<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('welcome');
        }else{
            return view('welcome_ar');
        }
    }
    public function news()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.all_news');
        }else{
            return view('web.all_news_ar');
        }
    }
    public function contact()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.contact');
        }else{
            return view('web.contact_ar');
        }
    }
    public function media()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.media');
        }else{
            return view('web.media_ar');
        }
    }
    public function singleNews()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.single_news');
        }else{
            return view('web.single_news_ar');
        }
    }
    public function sport()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.sports');
        }else{
            return view('web.sports_ar');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('dashboard');
    }


}
