<?php

namespace App\Http\Controllers;

use App\location;
use Illuminate\Http\Request;

class locationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$loc = location::paginate(5);
		return view('loc.list')->with(['loc'=>$loc]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		 return view("loc.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$loc = new location;
		$loc->name = strtoupper($request->locName);
		$loc->save();	
		return redirect('loc')->with('status', 'Location '.$loc->name.' created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(location $location)
    {
        //
		return view('loc.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
		$loc = location::find($request->id);
		return view('loc.edit')->with(['link'=>$loc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
		$loc = location::find($request->id);
		$loc->name = $request->locName;
		$loc->save();
		return redirect('loc')->with('status', $loc->name.' '.'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $loc =  location::find($request->id);
        $m = $loc;
        $loc->delete();
        return redirect('loc')->with('status','Location '.$m->name.' delete successfully.');
    }
}
