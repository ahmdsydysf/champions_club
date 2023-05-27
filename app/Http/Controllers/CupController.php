<?php

namespace App\Http\Controllers;

use App\Models\Cup;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cup::paginate(5);

        return view('dash.cup.all_cup', compact('data'));
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
            'title_en' => 'required',
            'title_ar' => 'required',
            'brief_en' => 'required',
            'brief_ar' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/cups/' . $myimageName));
            $request_data['image'] = $myimageName;
        }
        Cup::create($request_data);

        toast('Success Adding New Cup', 'success');

        return redirect()->route('dashboard.cup.index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cup $cup)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'brief_en' => 'required',
            'brief_ar' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {

            if ($cup->image != 'default_cup.jpg') {
                Storage::disk('public_uploads')->delete("/cups/$cup->image");
            }
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/cups/' . $myimageName));
            $request_data['image'] = $myimageName;
        }

        $cup->update($request_data);

        toast('Success Updating Cup', 'warning');

        return redirect()->route('dashboard.cup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cup $cup)
    {
        if ($cup->image != 'default_cup.jpg') {
            Storage::disk('public_uploads')->delete("/cups/$cup->image");
        }
        $cup->delete();
        toast('Success Deleteing Cup', 'error');
        return redirect()->route('dashboard.cup.index');
    }
}
