<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\SportDietLink;
use Illuminate\Http\Request;

class SportDietLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SportDietLink::paginate(5);

        return view('dash.feed_recommend.all_feed', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports = Sport::all();
        return view('dash.feed_recommend.add_feed', compact('sports'));
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
            'link_title_en' => 'required',
            'link_title_ar' => 'required',
            'sport_id' => 'required',
            'url' => 'required',
            ]);




        SportDietLink::create($request->all());

        toast('Success Adding New Diet Link', 'success');

        return redirect()->route('dashboard.feedRecommend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SportDietLink  $sportDietLink
     * @return \Illuminate\Http\Response
     */
    public function show(SportDietLink $sportDietLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SportDietLink  $sportDietLink
     * @return \Illuminate\Http\Response
     */
    public function edit(SportDietLink $sportDietLink)
    {
        $sports = Sport::all();
        return view('dash.feed_recommend.edit_feed', compact('sportDietLink', 'sports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SportDietLink  $sportDietLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SportDietLink $sportDietLink)
    {
        $request->validate([
            'link_title_en' => 'required',
            'link_title_ar' => 'required',
            'sport_id' => 'required',
            'url' => 'required',
            ]);



        $sportDietLink->update($request->all());

        toast('Success Updating Sport Dite Links', 'warning');

        return redirect()->route('dashboard.feedRecommend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SportDietLink  $sportDietLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(SportDietLink $sportDietLink)
    {
        $sportDietLink->delete();
        toast('Success Deleteing Diet Link', 'error');
        return redirect()->route('dashboard.feedRecommend.index');
    }
}
