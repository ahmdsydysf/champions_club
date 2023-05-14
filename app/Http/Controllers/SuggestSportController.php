<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

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
        if ($request->get('gender') == 1 && $request->get('height') >= 100) {
            $sports = Sport::where('id', 1)->get();
            foreach ($sports as $sport) {

            array_push($sugest, $sport);
                }

        }
        if ($request->get('gender') == 2 && $request->get('height') >= 100) {
            $sports = Sport::where('id', 2)->get();
            foreach ($sports as $sport) {

                array_push($sugest, $sport);
                }

        }
        if ($request->get('height') >= 100 && $request->get('weight') >= 40) {
            $sports = Sport::whereIn('id', [2,1])->get();
            foreach ($sports as $sport) {

                array_push($sugest, $sport);
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
                    <h5 id="ajName" class="card-title sport_subtitle">' . $row->sport_title_en . '</h5>
                    <p id="ajDesc" class="card-text sport_overview">' . $row->sport_overview_en . '</p>

                </div>
            </div>
</div>
        </div>';

        }
        echo $xx;
    }
}
