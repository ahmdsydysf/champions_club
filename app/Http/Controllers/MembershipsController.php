<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Membership_detail;
use Illuminate\Http\Request;

class MembershipsController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName ;
    public function __construct(Membership_detail $object)
    {

        $this->object = $object;
        $this->viewName = 'dash.memberships.';
    $this->routeName = 'memberships.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Membership_detail::orderBy("created_at", "Desc")->get();


        return view($this->viewName.'index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $row=Membership_detail::where('id',$id)->first();
      $attendance=Attendance::where('membership_details_id',$id)->get();
      return view($this->viewName.'show', compact('row','attendance'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Membership_detail::where('id',$id)->first();
        $attendance=Attendance::where('membership_details_id',$id)->get();
        return view($this->viewName.'attendance', compact('row','attendance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
