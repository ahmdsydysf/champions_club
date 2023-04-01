<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::paginate(5);

        return view('dash.service.all_service' , compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'brief_en' => 'required',
            'brief_ar' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $request_data = $request->except('image', '_token');

            if ($request->file('image')) {
                $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(770, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/service/' . $myimageName));
                $request_data['image'] = $myimageName;
            }
            Service::create($request_data);

            toast('Success Adding New service','success');

            return redirect()->route('dashboard.service.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'brief_en' => 'required',
            'brief_ar' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $request_data = $request->except('image', '_token');

            if ($request->file('image')) {

                if ($service->image != 'default_service.jpg') {
                    Storage::disk('public_uploads')->delete("/service/$service->image");
                }
                $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(770, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/service/' . $myimageName));
                $request_data['image'] = $myimageName;
            }

            $service->update($request_data);

            toast('Success Updating service','warning');

            return redirect()->route('dashboard.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->image != 'default_service.jpg') {
            Storage::disk('public_uploads')->delete("/service/$service->image");
        }
        $service->delete();
        toast('Success Deleteing service','error');
        return redirect()->route('dashboard.service.index');
    }
}
