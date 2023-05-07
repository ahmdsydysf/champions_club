<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Models\Membership_detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
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
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.profile.user_profile', [
                'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                'status' => session('status'),
            ]);
        }else{
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


    public function relativesMembers(){
        $user_id = Auth::user()->id ;
        $user_data = User::with('Children')->where('id',$user_id)->first();
        $member_ship_details = Membership_detail::with('sport')->get();
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.profile.user_profile_members' , compact('user_data','member_ship_details'));

        }else{
            return view('web.profile.user_profile_members_ar' , compact('user_data','member_ship_details'));

        }

    }

    public function yourMembership(){
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.profile.user_profile_membership');

        }else{
            return view('web.profile.user_profile_membership_ar');

        }

    }

}
