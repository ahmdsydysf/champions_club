<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Sport;
use Inertia\Response;
use App\Models\Company;
use App\Models\Sports_day;
use Illuminate\Http\Request;
use App\Models\User_children;
use App\Models\User_membership;
use App\Models\Membership_detail;
use App\Models\Membership_invoice;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class UserProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.profile.user_profile', [
                'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                'status' => session('status'),
            ]);
        } else {
            return view('web.profile.user_profile_ar', [
                'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                'status' => session('status'),
            ]);
        }

    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }


    public function relativesMembers()
    {
        $user_id = Auth::user()->id ;
        // $user_data = User::with(['Children','Children.memberships','Children.memberships.invoice'])->where('id',$user_id)->first();
        $user_data =User::with('Children.memberships.invoice')->where('id', $user_id)->first();
        // $user_child_member = $user_childrens->memberships')->get();
        // $user_child_member_invo = $user_child_member->with('invoice')->get();

        // $member_ship_details = Membership_detail::with(['invoice' ,'sport'])->get();
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.profile.user_profile_members', compact('user_data'));

        } else {
            return view('web.profile.user_profile_members_ar', compact('user_data'));

        }

    }

    public function childProfile($id)
    {

        $child = User_children::where('id', $id)->first() ;

        return view('web.profile.child_profile', compact('child'));

    }

    public function childSports($id)
    {
        $child = User_children::where('id', $id)->first() ;
        $sport = DB::table('sports')
            ->whereNotIn('id', function ($query) use ($id) {
                $query->select('sport_id')
                ->from('membership_details')
                ->where('child_id', $id);
            })->get();
        // $sport = Sport::all();
        $child_mem_details = Membership_detail::with('sport')->where('child_id', $id) ->orderByDesc('created_at')->get();
        return view('web.profile.child_sports', compact('child_mem_details', 'child', 'sport'));
    }

    public function childSportDiet(Request $request)
    {
        $child = User_children::with('memberships.sport.SportDietLinks')->where('id', $request->child_id)->first() ;

        return view('web.profile.child_diet_sport', compact('child'));
    }

    public function renewSport(Request $request)
    {

        $child = User_children::where('id', $request->child_id)->first();
        $sport_details = Sport::where('id', $request->sport_id)->first();
        return view('web.profile.child_renew_sport', compact('sport_details', 'child'));
    }

    public function newaddedsportrenew(Request $request)
    {

        $invoice_id = $request->invoice_id ;
        Membership_invoice::where('id', $invoice_id)->update(['invoice_status' => 1]);

        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.congrate');
        } else {
            return view('web.congrate_ar');
        }
    }



    public function addAnotherChildSport(Request $request)
    {
        function getDaysBetweenDates1($startDate, $endDate, $day1, $day2)
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
        $request->validate([
            'select_sport' => 'required',
        ]);
        $child = User_children::where('id', $request->child_id)->first();
        $sport_details = Sport::where('id', $request->select_sport)->first();
        $endate = Carbon::parse($request->start_date);
        $endate->addMonth();


        $annual=null;
        $annual=User_membership::where('user_id', Auth::user()->id)->
        where('end_date', '>', now()->format('Y-m-d'))->where('approved', 1)->first();

        if ($annual->approved == 1) {
            $totalFees = Sport::select('membership_disc_fees')->where('id', $request->select_sport)->first();
            $totalAfterVat = $totalFees->membership_disc_fees + ($totalFees->membership_disc_fees * 0.14);
        } else {
            $totalFees = Sport::select('membership_fees')->where('id', $request->select_sport)->first();
            $totalAfterVat = $totalFees->membership_fees + ($totalFees->membership_fees * 0.14);
        }


        DB::table('membership_invoices')->insert([
            'invoice_date' => now(),
            'order_total' => $totalAfterVat ,
            'vat_perc' => '0.14',
            'user_id' => Auth::user()->id,
        ]);
        $invoice_id = DB::getPdo()->lastInsertId();

        $sports_days = Sports_day::where('sport_id', $request->select_sport)->first();
        $childSessionDays = getDaysBetweenDates1($request->start_date, $endate, (string)$sports_days->firstday_id, (string)$sports_days->secondday_id);
        $start = $request->start_date;
        $end = $endate;
        DB::table('membership_details')->insert([
            'child_id' => $request->child_id,
            'sport_id' => $request->select_sport,
            'sport_days_id' => $request->select_days,
            'start_date' => $request->start_date,
            'end_date' => $endate,
            'fees' => $totalFees->membership_fees,
            'invoice_id' => $invoice_id,
            'created_at' => Carbon::now()
        ]);
        $member_id = DB::getPdo()->lastInsertId();
        foreach($childSessionDays as $key => $value) {
            DB::table('attendances')->insert([
                'session_date' => $value,
                'session_no' => $key + 1 ,
                'membership_details_id' => $member_id,
                'child_id' => $request->child_id,
            ]);
        }

        return view('web.profile.child_new_sport_pay', compact('child', 'sport_details', 'totalAfterVat', 'start', 'end', 'invoice_id'));
    }

    public function sportRenew(Request $request)
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
        $child_id = $request->child_id ;
        $user_id = $request->user_id ;
        $total = $request->total ;
        $sport_id = $request->sport_id ;

        $invoice = new Membership_invoice();
        $invoice->invoice_date = Carbon::now();
        $invoice->order_total = $total;
        $invoice->vat_perc = 0.14;
        $invoice->user_id = $user_id;
        $invoice->invoice_status = 1;
        $invoice->save();

        $invoice_new_id = $invoice->id;

        $firstDay = Sports_day::select('firstday_id')->where('sport_id', $sport_id)->first();
        $secondDay = Sports_day::select('secondday_id')->where('sport_id', $sport_id)->first();
        $startDate = Carbon::now();
        $endDate = Carbon::now()->addMonth();


        $childSessionDays = getDaysBetweenDates($startDate, $endDate, (string)$firstDay->firstday_id, (string)$secondDay->secondday_id);
        $updated_member = Membership_detail::where('child_id', $child_id)->where('sport_id', $sport_id)->first();
        foreach($childSessionDays as $key => $value) {
            DB::table('attendances')->insert([
                'session_date' => $value,
                'session_no' => $key + 1 ,
                'membership_details_id' => $updated_member->id,
                'child_id' => $child_id,
            ]);
        }
        $updated_member->update([
            'invoice_id' => $invoice_new_id,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ]);
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.congrate');
        } else {
            return view('web.congrate_ar');
        }

    }

    public function childUpdate($id, Request $request)
    {
        $request->validate([
            'name' => 'required' ,
            'personal_image' => 'image|mimes:jpeg,png,jpg' ,
            'birth_image' => 'image|mimes:jpeg,png,jpg' ,
            'birthdate' => 'required' ,
            'level' => 'required' ,
            'height' => 'required',
            'weight' => 'required',
        ]);
        $child = User_children::where('id', $id)->first() ;
        $request_data = $request->except('personal_image', 'birth_image', '_token');
        if ($request->file('personal_image')) {
            Storage::disk('public_uploads')->delete("/children_data/$child->personal_image");
            $myimageName = uniqid() . $request->file('personal_image')->getClientOriginalName();
            Image::make($request->file('personal_image'))->resize(260, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/children_data/' . $myimageName));
            $request_data['personal_image'] = $myimageName;
        }
        if ($request->file('birth_image')) {
            Storage::disk('public_uploads')->delete("/children_data/$child->birth_image");
            $myimageName = uniqid() . $request->file('birth_image')->getClientOriginalName();
            Image::make($request->file('birth_image'))->resize(260, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/children_data/' . $myimageName));
            $request_data['birth_image'] = $myimageName;
        }
        $child->update($request_data);
        return redirect()->route('childProfile', $id);
    }
    public function userImage($user_id, Request $request)
    {
        $user_data = User::find($user_id) ;
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png'
        ]);
        $request_data = $request->except('image', '_token');
        if ($request->file('image')) {
            if ($user_data->image != 'user_default.png') {
                Storage::disk('public_uploads')->delete('user/' . $user_data->image);
            }
            $imageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/user/' . $imageName));
            $request_data['image'] = $imageName;
        }
        $user_data->image =  $imageName;
        $user_data->save();
        return back()->with('success', 'your profile data updated successfully');
    }

    public function yourMembership()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.profile.user_profile_membership');

        } else {
            return view('web.profile.user_profile_membership_ar');

        }

    }

    /***
     * userMembership
     */
    public function userMembership()
    {
        $user_id = Auth::user()->id ;
        $mem_details = User_membership::where('user_id', $user_id) ->orderByDesc('created_at')->get();
        $lastMem= User_membership::where('user_id', $user_id)->latest('end_date')->first();
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.profile.user_year_membership', compact(['mem_details','lastMem']));

        } else {
            return view('web.profile.user_year_membership_ar', compact(['mem_details','lastMem']));

        }

    }

    public function renewAnuual()
    {
        $company=Company::first();
        return view('web.profile.member_annual_renew', compact('company'));

    }

    public function storeAnnual(Request $request)
    {
        $annual=new User_membership();
        $annual->user_id=Auth::user()->id ;
        $annual->start_date=$request->get('start_date') ;
        $annual->end_date=$request->get('end_date') ;
        $annual->fees_paid=$request->get('fees_paid') ;
        $annual->save();
        $user_id = Auth::user()->id ;
        $mem_details = User_membership::where('user_id', $user_id) ->orderByDesc('created_at')->get();
        $lastMem= User_membership::where('user_id', $user_id)->latest('end_date')->first();
        // if(LaravelLocalization::getCurrentLocale() == 'en') {
        //     return view('web.profile.user_year_membership', compact(['mem_details','lastMem']));

        // } else {
        //     return view('web.profile.user_year_membership_ar', compact(['mem_details','lastMem']));

        // }


        return redirect()->route('congratulation');
    }


    public function cong()
    {
        if(LaravelLocalization::getCurrentLocale() == 'en') {
            return view('web.congrate');
        } else {
            return view('web.congrate_ar');
        }
    }
}
