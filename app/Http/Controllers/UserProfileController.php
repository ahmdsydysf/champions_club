<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Membership_detail;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class UserProfileController extends Controller
{

    // private $user_id;

    // public function __construct()
    // {
    //     $this->user_id = Auth::user()->id;
    // }

/**
     * Display the user's profile form.
     */
    public function edit(Request $request)
    {
        return view('web.profile.user_profile', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
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
        return view('web.profile.user_profile_members' , compact('user_data','member_ship_details'));
    }

    public function yourMembership(){
        return view('web.profile.user_profile_membership');
    }

}
