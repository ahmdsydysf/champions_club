<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use PharIo\Manifest\Url;

class SuggestSportController extends Controller
{
    //
    public function index()
    {
        return view('web.suggest_sport');
    }
    public function suggest(Request $request)
    {
        /*=========
        height: height,
        gender: gender,
        age: age,
        weight: weight,
        flexRadioDefault: flexRadioDefault,
        disease1: disease1,
        disease2: disease2,
        disease3: disease3,
        ==========*/
        \Log::info($request->all());
        $sugest = [];
        if ($request->get('gender') == 1 && ($request->get('age') >= 4 && $request->get('age') <= 80) &&(($request->has('disease1') || $request->has('disease3')))  ) {
            if($request->has('disease2')){

            }else{
            $sports = ['sport_title_en'=>'tennes','sport_title_ar'=>'تنس'];


            array_push($sugest,$sports);
            }

        }
        if ($request->get('gender') == 1 && ($request->get('age') >= 4 && $request->get('age') <= 45) && (($request->has('disease1') || $request->has('disease3')))  ) {
            if($request->has('disease2')){

            }else{
            $sports = ['sport_title_en'=>'Basketball','sport_title_ar'=>'كرة سلة'];


                array_push($sugest, $sports);

            }
        }
        if ($request->get('gender') == 2 && ($request->get('age') >= 4 && $request->get('age') <= 45) && (($request->has('disease1') || $request->has('disease3')))  ) {

            if($request->has('disease2')){

            }else{
            $sports = ['sport_title_en'=>'Basketball','sport_title_ar'=>'كرة سلة'];


                array_push($sugest, $sports);
            }

        }
        if ($request->get('gender') == 2 && ($request->get('age') >= 14 ) && (($request->has('disease2') || $request->has('disease3')) )  ) {
            if($request->has('disease1')){

            }else{

            $sports = ['sport_title_en'=>'football','sport_title_ar'=>'كرة قدم'];


                array_push($sugest, $sports);
            }

        }
        if ($request->get('gender') == 1 && ($request->get('age') >= 6 && $request->get('age') <= 20 ) && (($request->has('disease2') || $request->has('disease3')) ) ) {
            if($request->has('disease1')){

            }else{

            $sports = ['sport_title_en'=>'football','sport_title_ar'=>'كرة قدم'];


                array_push($sugest, $sports);
            }

        }
        if ($request->get('gender') == 1 && ($request->get('age') >= 3 && $request->get('age') <= 100 ) && (($request->has('disease2') || $request->has('disease1'))) ) {
            if($request->has('disease3')){

            }else{
            $sports = ['sport_title_en'=>'Swimming','sport_title_ar'=>' سباحة'];


                array_push($sugest, $sports);
            }


        }
        if ($request->get('gender') == 2 && ($request->get('age') >= 3 && $request->get('age') <= 100 ) &&(($request->has('disease2') || $request->has('disease1')) )  ) {
           if($request->has('disease3')){

           }else{
            $sports = ['sport_title_en'=>'Swimming','sport_title_ar'=>' سباحة'];


            array_push($sugest, $sports);


    }
           }

        $test=[];
        foreach ($sugest as $obj) {
            if(!in_array($obj, $test)){
            array_push($test, $obj);
            }
        }

        // $sports = Sport::all();
        \Log::info($sugest);
        $xx = '';
        foreach ($test as $index => $row) {
            $xx .= '
            <div   class="container col-12 order-12 sport-details my-3">
            <div class="row col-sm-12">
            <div class="card col-sm-12 full_sport_details">
                <div class="card-header sport_title">
                Suggested sport no ' . ($index + 1) . '

                </div>
                <div class="card-body">
                    <h5 id="ajName" class="card-title sport_subtitle">' . $test[$index]['sport_title_en'] . '</h5>
                    <p id="ajDesc" class="card-text sport_overview">' . $test[$index]['sport_title_en'] . '</p>

                </div>
            </div>
</div>

        </div>
        <div class="row">
                            <div class=" col-12">

                            <div class="col-6 my-5 ">

                                <a href="'.Url('sport/1').'" class="submit-btn btn btn-primary reg float-left">
                                    Go To Our Sports >> </a>
                            </div>




                            </div>
                        </div> ';

        }
        echo $xx;
    }
}
