<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sport;
use App\Models\Day_new;
use App\Models\Sports_day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
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
    public function sport($sportid)
    {
        $thisSport = Sport::where('id' , $sportid)->first(['sport_title_en' , 'id' , 'sport_subtitle_en' , 'sport_image' , 'sport_overview_en']);
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            $sportData = Sport::all('sport_title_en' , 'id' );
            return view('web.sports' , compact('sportData','sportid','thisSport'));
        }else{
            $sportData = Sport::all('sport_title_ar' , 'id' );
            return view('web.sports_ar', compact('sportData','sportid','thisSport'));
        }
    }
    public function viewUserCart()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.user_children_cart');
        }else{
            return view('web.user_children_cart_ar');
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
        $sportDays = Sports_day::where('id', $sport_id)->firstOrFail();
        $firstday_name = Day_new::where('id', $sportDays->firstday_id)->firstOrFail();
        $secondday_name =Day_new::where('id', $sportDays->secondday_id)->firstOrFail();
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


        return response()->json(['data' => $output , 'firstday' => $firstday_name->en_day , 'secondday' => $secondday_name->en_day , 'dayid' =>$sportDays->id ]);
    }
    public function storeChildSport(Request $request)
    {

        function getDaysBetweenDates($startDate, $endDate, $day1, $day2) {
            $days = array();
            $currentDate = strtotime($startDate);
            $endDate = strtotime($endDate);

            while ($currentDate <= $endDate) {
                $dayNumber = date('N', $currentDate);
                if ($dayNumber == $day1 || $dayNumber == $day2) {
                    $days[] = date('Y-m-d', $currentDate);
                }
                $currentDate = strtotime('+1 day', $currentDate);
            }

            if (count($days) > 8) {
                $days = array_slice($days, 0, 8);
            }

            return $days;
        }
        DB::beginTransaction();
        try {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
                $names = $request->input('name');
                $birthdates = $request->input('birthdate');
                $hights = $request->input('hight');
                $weights = $request->input('weight');
                $selectSports = $request->input('select_sport');
                $levels = $request->input('level');
                $selectDays = $request->input('select_days');
                $startDates = $request->input('start_date');
                $endDates = $request->input('end_date');
                $paymentMethods = $request->input('paymentMethod');
                $userComments = $request->input('user_comments');
                $personal_image = $request->file('personal_image');
                $birth_image = $request->file('birth_image');

                $totalFees = 0 ;

                $cartChildrenData= [];

                for ($i = 0; $i < count($names); $i++) {

                // $request->validate([
                //             'personal_image['.$i.']' => 'image|mimes:jpeg,png,jpg|max:4048',
                //             'birth_image['.$i.']' => 'image|mimes:jpeg,png,jpg|max:4048',
                //             'name['.$i.']' => 'required',
                //             'birthdate['.$i.']' => 'required|date',
                //             'hight['.$i.']' => 'required',
                //             'weight['.$i.']' => 'required',
                //             'selectSport['.$i.']' => 'required',
                //             'level['.$i.']' => 'required',
                //             'selectDay['.$i.']' => 'required',
                //             'startDate['.$i.']' => 'required',
                //             'endDate['.$i.']' => 'required',
                //             'paymentMethod['.$i.']' => 'required',
                //             'userComment['.$i.']' => 'required',
                //         ]);
                //         dd('first');

                $request_data = $request->except('personal_image['.$i.']', 'birth_image['.$i.']' ,'_token');
                if ($personal_image[$i]) {
                            $myimageName = uniqid() . $personal_image[$i]->getClientOriginalName();
                            Image::make($personal_image[$i])->resize(300, null, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save(public_path('uploads/children_data/' . $myimageName));
                            $personal_image[$i] = $myimageName;
                    }
                if ($birth_image[$i]) {
                            $myimageName = uniqid() . $birth_image[$i]->getClientOriginalName();
                            Image::make($birth_image[$i])->resize(400, null, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save(public_path('uploads/children_data/' . $myimageName));
                            $birth_image[$i] = $myimageName;
                    }
                    DB::table('user_childrens')->insert([
                                'name' => $names[$i],
                                'birthdate' => $birthdates[$i],
                                'personal_image' => $personal_image[$i],
                                'birth_image' => $birth_image[$i],
                                'height' => $hights[$i],
                                'width' => $weights[$i],
                                'level' => $levels[$i],
                                'user_id' => Auth::user()->id,
                    ]);
                    $id = DB::getPdo()->lastInsertId();
                    $sportFees = Sport::select('membership_fees')->where('id',$selectSports[$i])->first();

                    DB::table('membership_details')->insert([
                        'child_id' => $id,
                        'sport_id' => $selectSports[$i],
                        'sport_days_id' => $selectDays[$i],
                        'start_date' => $startDates[$i],
                        'end_date' => $endDates[$i],
                        'fees' => $sportFees->membership_fees,
                        'user_comment' =>$userComments[$i]
                    ]);
                    $id3 = DB::getPdo()->lastInsertId();
                    $cartChildrenData[] = $id3 ;

                    DB::table('membership_invoices')->insert([
                        'invoice_date' => now(),
                        'vat_perc' => '0.14',
                        'user_id' => Auth::user()->id,
                    ]);

                    $id2 = DB::getPdo()->lastInsertId();

                    DB::table('membership_details')
                    ->where('id', $id3)
                    ->update(['invoice_id' => $id2]);

                    $id4 = DB::getPdo()->lastInsertId();

                    $totalFees += $sportFees->membership_fees ;

                    $firstDay = Sports_day::select('firstday_id')->where('sport_id' ,$selectSports[$i])->first();
                $secondDay = Sports_day::select('secondday_id')->where('sport_id' ,$selectSports[$i])->first();

                $childSessionDays = getDaysBetweenDates($startDates[$i], $endDates[$i], (string)$firstDay->firstday_id, (string)$secondDay->secondday_id);

                foreach($childSessionDays as $key => $value){
                    DB::table('attendances')->insert([
                                'session_date' => $value,
                                'session_no' => $key + 1 ,
                                'membership_details_id' => $id3,
                                'child_id' => $id,
                            ]);
                }


            }
            
            DB::commit(); 
            DB::statement('SET FOREIGN_KEY_CHECKS=1');

                    DB::table('membership_invoices')
                    ->where('id', $id2)
                    ->update(['order_total' => $totalFees * 0.14 + $totalFees]);
                    toast('Success Adding Children','success');

                    return redirect()->route('dashboard.slider_image.index');
                    // DB::commit();

                 } catch (\Exception $e) {

                        DB::rollback();
                        Log::error($e->getMessage());
                        dd($e);
                        return redirect()->back()->withInput();
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
