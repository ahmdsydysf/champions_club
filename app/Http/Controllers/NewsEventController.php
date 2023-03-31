<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class NewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NewsEvent::paginate(5);

        return view('dash.news_event.all_news_event' , compact('data'));
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
        'date' => 'required',
        'brief_en' => 'required',
        'brief_ar' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $request_data = $request->except('image', '_token');

        if ($request->file('image')) {
            $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(255, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/event/' . $myimageName));
            $request_data['image'] = $myimageName;
        }
        NewsEvent::create($request_data);

        toast('Success Adding New Event','success');

        return redirect()->route('dashboard.news_event.index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsEvent  $newsEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsEvent $newsEvent)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'date' => 'required',
            'brief_en' => 'required',
            'brief_ar' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $request_data = $request->except('image', '_token');

            if ($request->file('image')) {

                if ($newsEvent->image != 'default_event.jpg') {
                    Storage::disk('public_uploads')->delete("/event/$newsEvent->image");
                }
                $myimageName = uniqid() . $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(250, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/event/' . $myimageName));
                $request_data['image'] = $myimageName;
            }

            $newsEvent->update($request_data);

            toast('Success Updating Event','warning');

            return redirect()->route('dashboard.news_event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsEvent  $newsEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsEvent $newsEvent)
    {
        if ($newsEvent->image != 'default_event.jpg') {
            Storage::disk('public_uploads')->delete("/event/$newsEvent->image");
        }
        $newsEvent->delete();
        toast('Success Deleteing event','error');
        return redirect()->route('dashboard.news_event.index');
    }
}
