<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{

    public function edit(SocialLink $socialLink)
    {
        return view('dash.social.edit_social' , compact('socialLink'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialLink  $socialLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialLink $socialLink)
    {
        $request->validate([
            'facebook' => 'required' ,
            'twitter' => 'required' ,
            'instgram' => 'required' ,
            'youtube' => 'required' ,
            'linkedin' => 'required' ,
        ]);

        $socialLink->update($request->all());

        toast('Success Updating Social','warning');

        return redirect()->route('dashboard.social.edit' , ['social' => 1]);
    }


}
