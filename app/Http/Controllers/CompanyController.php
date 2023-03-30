<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('dash.company.edit_company' , compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'about_master_en' => 'required' ,
            'about_master_ar' => 'required' ,
            'about_details_en' => 'required' ,
            'about_details_ar' => 'required' ,
            'about_video' => 'required' ,
            'sports_title_en' => 'required' ,
            'sports_title_ar' => 'required' ,
            'sports_text_en' => 'required' ,
            'sports_text_ar' => 'required' ,
            'services_text_en' => 'required' ,
            'services_text_ar' => 'required' ,
            'services_title_en' => 'required' ,
            'services_title_ar' => 'required' ,
            'membership_text_en' => 'required' ,
            'membership_text_ar' => 'required' ,
            'membership_title_en' => 'required' ,
            'membership_title_ar' => 'required' ,
            'news_text_en' => 'required' ,
            'news_text_ar' => 'required' ,
            'news_title_en' => 'required' ,
            'news_title_ar' => 'required' ,

        ]);

        $company->update($request->all());

        toast('Success Updating Company','warning');

        return redirect()->route('dashboard.company.edit' , ['company' => 1]);
    }


}
