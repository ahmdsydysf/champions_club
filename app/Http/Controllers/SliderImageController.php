<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SliderImageController extends Controller
{

    public function index()
    {
        $data = SliderImage::select('id' ,'image', 'title_en', 'title_ar', 'subtitle_en', 'subtitle_ar')->paginate(5);

        return view('dash.slider_image.all_slider_images' , compact('data'));
    }


    public function create()
    {
        return view('dash.slider_image.add_slider_images');
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
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_en' => 'required',
            'title_ar' => 'required',
            'subtitle_en' => 'required',
            'subtitle_ar' => 'required',
            'overview_en' => 'required',
            'overview_ar' => 'required',
            'nav_title_en' => 'required',
            'nav_title_ar' => 'required',
            'nav_subtitle_en' => 'required',
            'nav_subtitle_ar' => 'required',
        ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(1900, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/slider/' . $myimageName));
            $request_data['image'] = $myimageName;
        }

        SliderImage::create($request_data);

        toast('Success Adding New Slider','success');

        return redirect()->route('dashboard.slider_image.index');
    }



    public function edit(SliderImage $sliderImage)
    {
        return view('dash.slider_image.edit_slider_images' , compact('sliderImage'));
    }


    public function update(Request $request, SliderImage $sliderImage)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title_en' => 'required',
            'title_ar' => 'required',
            'subtitle_en' => 'required',
            'subtitle_ar' => 'required',
            'overview_en' => 'required',
            'overview_ar' => 'required',
            'nav_title_en' => 'required',
            'nav_title_ar' => 'required',
            'nav_subtitle_en' => 'required',
            'nav_subtitle_ar' => 'required',
        ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {

            if ($sliderImage->image != 'default_slider.jpg') {
                Storage::disk('public_uploads')->delete("/slider/$sliderImage->image");
            }
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(1900, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/slider/' . $myimageName));
            $request_data['image'] = $myimageName;
        }

        $sliderImage->update($request_data);

        toast('Success Updating Slider','warning');

        return redirect()->route('dashboard.slider_image.index');
    }

    public function destroy(SliderImage $sliderImage)
    {
        if ($sliderImage->image != 'default_slider.jpg') {
            Storage::disk('public_uploads')->delete("/slider/$sliderImage->image");
        }
        $sliderImage->delete();
        toast('Success Deleteing Slider','error');
        return redirect()->route('dashboard.slider_image.index');
    }
}
