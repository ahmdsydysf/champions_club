<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sport;
use App\Models\Day_new;
use App\Models\Sports_day;
use Illuminate\Http\Request;
use App\Models\User_children;
use App\Models\Membership_detail;
use App\Models\Membership_invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
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
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('welcome');
        } else {
            return view('welcome_ar');
        }
    }
    public function news()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.all_news');
        } else {
            return view('web.all_news_ar');
        }
    }
    public function contact()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.contact');
        } else {
            return view('web.contact_ar');
        }
    }
    public function media()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.media');
        } else {
            return view('web.media_ar');
        }
    }
    public function singleNews()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.single_news');
        } else {
            return view('web.single_news_ar');
        }
    }
    public function sport($sportid)
    {
        $thisSport = Sport::where('id', $sportid)->first(['sport_title_en' ,'created_at', 'id' , 'sport_subtitle_en' , 'sport_image' , 'sport_overview_en']);
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            $sportData = Sport::all('sport_title_en', 'id');
            return view('web.sports', compact('sportData', 'sportid', 'thisSport'));
        } else {
            $sportData = Sport::all('sport_title_ar', 'id');
            return view('web.sports_ar', compact('sportData', 'sportid', 'thisSport'));
        }
    }
    public function viewUserCart()
    {
        $childrenIds = request()->session()->get('cildrenIds');
        $membershipDetails = request()->session()->get('membershipDetails');

        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.user_children_cart', compact('childrenIds', 'membershipDetails'));
        } else {
            return view('web.user_children_cart_ar', compact('childrenIds', 'membershipDetails'));
        }
        // ['cildrenIds'=>$cildrenIds ,'membershipDetails' => $membershipDetails]
    }


    public function child_sport()
    {
        $sports = Sport::all();
        if(LaravelLocalization::getCurrentLocale() == 'en') {

            return view('web.add_child_sport', compact('sports'));

        } else {
            return view('web.add_child_sport_ar', compact('sports'));

        }
    }

    public function childSportData(Request $request)
    {
        $sport_id = $request->get('sport_id');

        $SportData = Sport::where('id', $sport_id)->get();
        $sportDays = Sports_day::where('id', $sport_id)->firstOrFail();
        $firstday_name = Day_new::where('id', $sportDays->firstday_id)->firstOrFail();
        $secondday_name =Day_new::where('id', $sportDays->secondday_id)->firstOrFail();
        if(LaravelLocalization::getCurrentLocale() == 'en') {
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

        } else {
            $output = '
            <div class="card-header sport_title">' .
            $SportData[0]->sport_title_ar  .'تفاصيل
            </div>
            <div class="card-body">
                <h5 class="card-title sport_subtitle"> ' . $SportData[0]->sport_subtitle_ar .'</h5>
                <p class="card-text sport_overview">'. $SportData[0]->sport_overview_ar .'</p>
                <h5 class="card-title">تكلفة الرياضة</h5>
                <p class="card-text membership_fees">'. $SportData[0]->membership_fees .' جنيه</p>
            </div>
    ';

            return response()->json(['data' => $output , 'firstday' => $firstday_name->ar_day , 'secondday' => $secondday_name->ar_day , 'dayid' =>$sportDays->id ]);

        }




    }
    public function storeChildSport(Request $request)
    {

        function getDaysBetweenDates($startDate, $endDate, $day1, $day2)
        {
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
            $cildrenIds = [];
            $membershipDetails = [];
            $fullChildren = [];
            $fullMember = [];

            session()->put('child_img', []);
            session()->put('child_id', []);
            session()->put('Member_detail', []);
            session()->put('attendance', []);
            session()->put('member_invoices', []);

            for ($i = 0; $i < count($names); $i++) {
                $request_data = $request->except('personal_image['.$i.']', 'birth_image['.$i.']', '_token');
                if ($personal_image[$i]) {
                    $myimageName = uniqid() . $personal_image[$i]->getClientOriginalName();
                    Image::make($personal_image[$i])->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path('uploads/children_data/' . $myimageName));
                    $personal_image[$i] = $myimageName;

                    session()->push('child_img', $myimageName);
                }
                if ($birth_image[$i]) {
                    $myimageName = uniqid() . $birth_image[$i]->getClientOriginalName();
                    Image::make($birth_image[$i])->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path('uploads/children_data/' . $myimageName));
                    $birth_image[$i] = $myimageName;
                    session()->push('child_img', $myimageName);
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
                session()->push('child_id', $id);

                $sportFees = Sport::select('membership_fees')->where('id', $selectSports[$i])->first();

                DB::table('membership_details')->insert([
                    'child_id' => $id,
                    'sport_id' => $selectSports[$i],
                    'sport_days_id' => $selectDays[$i],
                    'start_date' => $startDates[$i],
                    'end_date' => $endDates[$i],
                    'fees' => $sportFees->membership_fees,
                    'user_comment' =>$userComments[$i],
                    'created_at' => Carbon::now()
                ]);
                $id3 = DB::getPdo()->lastInsertId();
                session()->push('Member_detail', $id3);

                $cildrenIds[] = $id ;// will get from it child_id
                $membershipDetails[] = $id3 ;

                $totalFees += $sportFees->membership_fees ;

                $firstDay = Sports_day::select('firstday_id')->where('sport_id', $selectSports[$i])->first();
                $secondDay = Sports_day::select('secondday_id')->where('sport_id', $selectSports[$i])->first();

                $childSessionDays = getDaysBetweenDates($startDates[$i], $endDates[$i], (string)$firstDay->firstday_id, (string)$secondDay->secondday_id);

                foreach($childSessionDays as $key => $value) {
                    DB::table('attendances')->insert([
                        'session_date' => $value,
                        'session_no' => $key + 1 ,
                        'membership_details_id' => $id3,
                        'child_id' => $id,
                    ]);
                    $id_attend = DB::getPdo()->lastInsertId();
                    session()->push('attendance', $id_attend);

                }
            }
            DB::table('membership_invoices')->insert([
                'invoice_date' => now(),
                'order_total' => $totalFees * 0.14 + $totalFees ,
                'vat_perc' => '0.14',
                'user_id' => Auth::user()->id,
            ]);
            $id2 = DB::getPdo()->lastInsertId();
            session()->push('member_invoices', $id2);

            foreach($cildrenIds as $childId) {
                DB::table('membership_details')
                    ->where('child_id', $childId)
                    ->update(['invoice_id' => $id2]);
            }

            DB::commit();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
            foreach($cildrenIds as $childdid) {
                $fullChildren[] = User_children::where('id', $childdid)->first();
            }
            foreach($membershipDetails as $memDetail) {
                $fullMember[] = Membership_detail::with(['sport' , 'child' , 'invoice'])->where('id', $memDetail)->first();
            }
            // session(['cildrenIds' => $fullChildren]);
            // session(['membershipDetails' => $fullMember]);
            $request->session()->put('childrenIds', $fullChildren);
            $request->session()->put('membershipDetails', $fullMember);

            if(LaravelLocalization::getCurrentLocale() == 'en') {
                return redirect('/user/children/cart')->with(['cildrenIds'=>$fullChildren ,'membershipDetails' => $fullMember ]);
            } else {
                return redirect('/user/children/cart')->with(['cildrenIds'=>$fullChildren ,'membershipDetails' => $fullMember]);
            }
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            dd($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

        public function discardCartChanges()
        {
            foreach(session()->get('child_img') as $img) {
                unlink(public_path('uploads/children_data/' . $img));
            }


            foreach(session()->get('attendance') as $att) {
                $table1Data = Attendance::where('id', $att)->first();
                $table1Data->delete();
            }
            foreach(session()->get('member_invoices') as $inv) {
                $table1Data = Membership_invoice::where('id', $inv)->first();
                $table1Data->delete();
            }
            foreach(session()->get('Member_detail') as $c_mem) {
                $table1Data = Membership_detail::where('id', $c_mem)->first();
                $table1Data->delete();
            }
            foreach(session()->get('child_id') as $c_id) {
                $table1Data = User_children::where('id', $c_id)->first();
                $table1Data->delete();
            }
            session()->remove('child_img');
            session()->remove('child_id');
            session()->remove('Member_detail');
            session()->remove('attendance');
            session()->remove('member_invoices');
            return redirect()->route('childSport');


        }
        public function changeCartStatus(Request $request)
        {
            Membership_invoice::where('id', $request->invoice_status)->update(['invoice_status' => '1']);
            return view('web.congrate');
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
