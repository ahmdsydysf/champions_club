<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sponsor::paginate(5);

        return view('dash.sponsor.all_sponsor', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'image|mimes:jpeg,png,jpg',
            ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sponsor/' . $myimageName));
            $request_data['image'] = $myimageName;
        }
        Sponsor::create($request_data);

        toast('Success Adding New Sponsor', 'success');

        return redirect()->route('dashboard.sponsor.index');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $request->validate([

            'image' => 'image|mimes:jpeg,png,jpg',
            ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {

            if ($sponsor->image != 'default_sponsor.png') {
                Storage::disk('public_uploads')->delete("/sponsor/$sponsor->image");
            }
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sponsor/' . $myimageName));
            $request_data['image'] = $myimageName;
        }

        $sponsor->update($request_data);

        toast('Success Updating sponsor', 'warning');

        return redirect()->route('dashboard.sponsor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        if ($sponsor->image != 'default_sponsor.png') {
            Storage::disk('public_uploads')->delete("/sponsor/$sponsor->image");
        }
        $sponsor->delete();
        toast('Success Deleteing sponsor', 'error');
        return redirect()->route('dashboard.sponsor.index');
    }
}
