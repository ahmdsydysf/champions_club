<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::select('id' ,'about_master_en', 'about_master_ar', 'sports_title_en', 'sports_title_ar', 'services_title_en', 'services_title_ar')->paginate(5);

        return view('dash.company.all_company' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.company.add_company');
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

        Company::create($request->all());

        toast('Success Adding New Company','success');

        return redirect()->route('dashboard.company.index');
    }


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

        return redirect()->route('dashboard.company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        toast('Success Deleteing Company','error');
        return redirect()->route('dashboard.company.index');
    }
}
