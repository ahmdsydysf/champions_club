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
        // echo json_encode(array("output", 'vvvv'));
        $sports=Sport::all();
        $xx='';
        foreach ($sports as $index=>$row) {
            $xx .='
            <div   class="container col-12 order-12 sport-details my-3">
            <div class="row col-sm-12">
            <div class="card col-sm-12 full_sport_details">
                <div class="card-header sport_title">
                Suggested sport no '.($index+1).'

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
