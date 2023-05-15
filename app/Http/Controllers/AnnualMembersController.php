<?php

namespace App\Http\Controllers;

use App\Models\User_membership;
use Illuminate\Http\Request;

class AnnualMembersController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName ;
    public function __construct(User_membership $object)
    {

        $this->object = $object;
        $this->viewName = 'dash.annual-members.';
        $this->routeName = 'annual-members.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=User_membership::orderBy("created_at", "Desc")->get();


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
        $row=User_membership::where('id',$id)->first();
        $row->update([
            'approved' =>2,
        ]);

        return redirect()->back()->with('flash_success', 'update done successfully!');    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=User_membership::where('id',$id)->first();
        $row->update([
            'approved' =>1,
        ]);

        return redirect()->back()->with('flash_success', 'update done successfully!');   }


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
