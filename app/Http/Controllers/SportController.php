<?php

namespace App\Http\Controllers;

use App\Models\Day_new;
use App\Models\Sport;
use App\Models\Sports_day;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sport::select('id', 'sport_title_en', 'sport_title_ar', 'sport_subtitle_en', 'sport_subtitle_ar', 'sport_image')->paginate(5);

        return view('dash.sport.all_sport', compact('data'));
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
            'sport_image' => 'image|mimes:jpeg,png,jpg' ,
            'sport_overview_en' => 'required',
            'sport_overview_ar' => 'required',
            'membership_fees' => 'required' ,
            'membership_en_notes' => 'required' ,
            'membership_ar_notes' => 'required' ,
            'feed_recommend' => 'required' ,

        ]);

        $request_data = $request->except('sport_image', '_token');

        if ($request->file('sport_image')) {
            $myimageName =$request->file('sport_image')->getClientOriginalName();
            Image::make($request->file('sport_image'))->resize(260, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sport/' . $myimageName));
            $request_data['sport_image'] = $myimageName;
        }

        Sport::create($request_data);

        toast('Success Adding New Sport', 'success');

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
        $sportDays = Sports_day::where('sport_id', $sport->id)->get();
        $days=Day_new::all();
        return view('dash.sport.edit_sport', compact('sport', 'sportDays', 'days'));

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
        DB::beginTransaction();
        try {
            // Disable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            $request->validate([
                'sport_title_en' => 'required' ,
                'sport_title_ar' => 'required' ,
                'sport_subtitle_en' => 'required' ,
                'sport_subtitle_ar' => 'required' ,
                'sport_image' => 'image|mimes:jpeg,png,jpg' ,
                'sport_overview_en' => 'required',
                'sport_overview_ar' => 'required',
                'membership_fees' => 'required' ,
                'membership_en_notes' => 'required' ,
                'membership_ar_notes' => 'required' ,
                'feed_recommend' => 'required' ,

            ]);

            $request_data = $request->except('sport_image', '_token');

            if ($request->file('sport_image')) {

                if ($sport->sport_image != 'default_sport.jpg') {
                    Storage::disk('public_uploads')->delete("/sport/$sport->sport_image");
                }
                $myimageName =$request->file('sport_image')->getClientOriginalName();
                Image::make($request->file('sport_image'))->resize(260, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/sport/' . $myimageName));
                $request_data['sport_image'] = $myimageName;
            }
dd($request_data);
            $sport->update($request_data);
            //update sport days
            $sportDay = Sports_day::where('sport_id', $sport->id)->first();

            if ($sportDay !== null) {
                $sportDay->update(
                    ['firstday_id' => request('firstday_id'),
                    'secondday_id' => request('secondday_id'),
                    'sport_time' => request('sport_time')],
                );
            } else {
                $sportDay = Sports_day::create(
                    ['sport_id' => $sport->id,
                    'firstday_id' => request('firstday_id'),
                    'secondday_id' => request('secondday_id'),
                    'sport_time' => request('sport_time')],
                );
            }
            DB::commit();
            //Enable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            toast('Success Updating Sport', 'warning');

            return redirect()->route('dashboard.sport.index');
        } catch (\Throwable$e) {
            // throw $th;
            DB::rollback();
            dd($e->getMessage());
            // return redirect()->back()->withInput()->withErrors($e->getMessage());

        }

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
        toast('Success Deleteing Sport', 'error');
        return redirect()->route('dashboard.sport.index');
    }
}
