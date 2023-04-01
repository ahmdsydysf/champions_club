<?php

namespace App\Http\Controllers;

use App\Models\GeneralService;
use Illuminate\Http\Request;

class GeneralServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GeneralService::paginate(5);

        return view('dash.general_service.all_general_service' , compact('data'));
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
            'service_en' => 'required',
            'service_ar' => 'required',
            'overview_en' => 'required',
            'overview_ar' => 'required',

            ]);

            GeneralService::create($request->all());

            toast('Success Adding General Service','success');

            return redirect()->route('dashboard.general_service.index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralService  $generalService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralService $generalService)
    {
        $request->validate([
            'service_en' => 'required',
            'service_ar' => 'required',
            'overview_en' => 'required',
            'overview_ar' => 'required',
            ]);


            $generalService->update($request->all());

            toast('Success Updating general service','warning');

            return redirect()->route('dashboard.general_service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralService  $generalService
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralService $generalService)
    {
        $generalService->delete();
        toast('Success Deleteing General Services','error');
        return redirect()->route('dashboard.general_service.index');
    }
}
