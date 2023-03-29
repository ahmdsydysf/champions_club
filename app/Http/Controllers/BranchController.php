<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Branch::select('id' ,'branch_en', 'branch_ar', 'address_en', 'address_ar', 'phone')->paginate(5);

        return view('dash.branch.all_branch' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.branch.add_branch');

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
            'branch_en' => 'required' ,
            'branch_ar' => 'required' ,
            'address_en' => 'required' ,
            'address_ar' => 'required' ,
            'phone' => 'required' ,
            'whatsapp' => 'required' ,
            'email' => 'required' ,
            'google_map' => 'required' ,
            'master_branch' => 'required' ,
            'working_hours_en' => 'required' ,
            'working_hours_ar' => 'required' ,
        ]);

        Branch::create($request->all());

        toast('Success Adding New Branch','success');

        return redirect()->route('dashboard.branch.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('dash.branch.edit_branch' , compact('branch'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {

        $request->validate([
            'branch_en' => 'required' ,
            'branch_ar' => 'required' ,
            'address_en' => 'required' ,
            'address_ar' => 'required' ,
            'phone' => 'required' ,
            'whatsapp' => 'required' ,
            'email' => 'required' ,
            'google_map' => 'required' ,
            'master_branch' => 'required' ,
            'working_hours_en' => 'required' ,
            'working_hours_ar' => 'required' ,
        ]);

        $branch->update($request->all());

        toast('Success Updating Branch','warning');

        return redirect()->route('dashboard.branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        toast('Success Deleteing Branch','error');
        return redirect()->route('dashboard.branch.index');
    }
}
