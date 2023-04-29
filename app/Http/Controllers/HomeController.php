<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
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


    public function child_sport()
    {
        $sports = Sport::all();
        if(LaravelLocalization::getCurrentLocale() == 'en'){

            return view('web.add_child_sport', compact('sports'));

        }else{
            return view('web.add_child_sport_ar', compact('sports'));

        }
    }

    public function childSportData(Request $request){
        $sport_id = $request->get('sport_id');

        $SportData = Sport::where('id', $sport_id)->get();

        $output = '
                <div class="card-header sport_title">' .
                $SportData[0]->sport_title_en  .'Details
                </div>
                <div class="card-body">
                    <h5 class="card-title sport_subtitle"> ' . $SportData[0]->sport_subtitle_en .'</h5>
                    <p class="card-text sport_overview">'. $SportData[0]->sport_overview_en .'</p>
                    <h5 class="card-title">Sport Cost</h5>
                    <p class="card-text membership_fees">'. $SportData[0]->membership_fees .' EGP</p>
                </div>
        ';


        echo $output;
    }
    public function storeChildSport(Request $request)
    {
        dd($request);

    DB::beginTransaction();

    try {

        $data = $request->all();


        DB::table('user_childrens')->insert([
            'name' => $data['column1'],
            'birthdate' => $data['column2'],
            'personal_image' => $data['column2'],
            'birth_image' => $data['column2'],
            'height' => $data['column2'],
            'width' => $data['column2'],
            'level' => $data['column2'],
            'user_id' => Auth::user()->id,
        ]);


        $id = DB::getPdo()->lastInsertId();


        DB::table()->insert([

        ]);


        DB::commit();

    } catch (\Exception $e) {

        DB::rollback();


        Log::error($e->getMessage());


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
