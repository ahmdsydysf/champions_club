<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sport::select('id' ,'sport_title_en', 'sport_title_ar', 'sport_subtitle_en', 'sport_subtitle_ar', 'sport_image')->paginate(5);

        return view('dash.sport.all_sport' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.sport.add_sport');
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
            'sport_title_en' => 'required' ,
            'sport_title_ar' => 'required' ,
            'sport_subtitle_en' => 'required' ,
            'sport_subtitle_ar' => 'required' ,
            'sport_image' => 'image|mimes:jpeg,png,jpg|max:2048' ,
            'sport_overview_en' => 'required',
            'sport_overview_ar' => 'required',
        ]);

        $request_data = $request->except('sport_image', '_token');

        if ($request->file('sport_image')) {
            $myimageName = uniqid() . $request->file('sport_image')->getClientOriginalName();
            Image::make($request->file('sport_image'))->resize(260, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sport/' . $myimageName));
            $request_data['sport_image'] = $myimageName;
        }

        Sport::create($request_data);

        toast('Success Adding New Sport','success');

        return redirect()->route('dashboard.sport.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        return view('dash.sport.edit_sport' , compact('sport'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
    {
        $request->validate([
            'sport_title_en' => 'required' ,
            'sport_title_ar' => 'required' ,
            'sport_subtitle_en' => 'required' ,
            'sport_subtitle_ar' => 'required' ,
            'sport_image' => 'image|mimes:jpeg,png,jpg|max:2048' ,
            'sport_overview_en' => 'required',
            'sport_overview_ar' => 'required',
        ]);

        $request_data = $request->except('sport_image', '_token');

        if ($request->file('sport_image')) {

            if ($sport->sport_image != 'default_sport.jpg') {
                Storage::disk('public_uploads')->delete("/sport/$sport->sport_image");
            }
            $myimageName = uniqid() . $request->file('sport_image')->getClientOriginalName();
            Image::make($request->file('sport_image'))->resize(260, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sport/' . $myimageName));
            $request_data['sport_image'] = $myimageName;
        }

        $sport->update($request_data);

        toast('Success Updating Sport','warning');

        return redirect()->route('dashboard.sport.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sport $sport)
    {
        if ($sport->sport_image != 'default_sport.jpg') {
            Storage::disk('public_uploads')->delete("/sport/$sport->sport_image");
        }
        $sport->delete();
        toast('Success Deleteing Sport','error');
        return redirect()->route('dashboard.sport.index');
    }
}
