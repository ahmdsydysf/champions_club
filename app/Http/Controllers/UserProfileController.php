<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Models\Membership_detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User_children;
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
        // $user_data = User::with(['Children','Children.memberships','Children.memberships.invoice'])->where('id',$user_id)->first();
        $user_data =User::with('Children.memberships.invoice')->where('id',$user_id)->first();
        // $user_child_member = $user_childrens->memberships')->get();
        // $user_child_member_invo = $user_child_member->with('invoice')->get();

        // $member_ship_details = Membership_detail::with(['invoice' ,'sport'])->get();
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.profile.user_profile_members' , compact('user_data'));

        }else{
            return view('web.profile.user_profile_members_ar' , compact('user_data'));

        }

    }
    public function childProfile($id){

        $child = User_children::where('id',$id)->first() ;

        return view('web.profile.child_profile' , compact('child'));

    }
    public function childSports($id){

        $child = User_children::where('id',$id)->first() ;

        return view('web.profile.child_profile' , compact('child'));

    }
    public function childUpdate($id , Request $request)
    {
        $request->validate([
            'name' => 'required' ,
            'personal_image' => 'image|mimes:jpeg,png,jpg|max:2048' ,
            'birth_image' => 'image|mimes:jpeg,png,jpg|max:2048' ,
            'birthdate' => 'required' ,
            'level' => 'required' ,
            'height' => 'required',
            'weight' => 'required',
        ]);

        $child = User_children::where('id',$id)->first() ;

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

        return redirect()->route('childProfile' , $id);

    }
    public function userImage($user_id , Request $request){

         $user_data = User::find($user_id) ;

         $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png|max:2048'
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

    public function yourMembership(){
        if(LaravelLocalization::getCurrentLocale() == 'en'){
            return view('web.profile.user_profile_membership');

        }else{
            return view('web.profile.user_profile_membership_ar');

        }

    }

}
