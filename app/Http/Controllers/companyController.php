<?php

namespace App\Http\Controllers;

use App\company;
use App\location;
use Illuminate\Http\Request;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }	 
    public function index()
    {
        //
		$comp = company::with('location')->paginate(5);
		return view('comp.list')->with('comp', $comp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$loc = location::all();
		$arr = [];
		foreach($loc as $l){
			$arr[$l->id] = $l->name;			
		}
		return view('comp.index')->with('loc', $arr);
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
		$c = $request->compLoc;
		foreach($c as $t){
		$comp = new company;
		$comp->name = $request->compName;
		$comp->description = $request->compDesc;
		$comp->comp_gm = $request->compGM;
		$comp->compgm_email = $request->compGEmail;
		$comp->location_id = $t;
		$comp->save();
		}
		return redirect("comp")->with('status', 'Company '.$comp->name.' save successfully');
	
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
		$comp = company::with('location')->find($request->id);
		$loc = [];
		$t = location::all();
		foreach($t as $l){
		$loc[$l->id] = $l->name;			
		}
		return view('comp.edit')->with(['comp'=> $comp, 'loc'=>$loc]);
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
		$comp = company::find($request->id);
		$comp->name = $request->compName;
		$comp->description = $request->compDesc;
		$comp->comp_gm = $request->compGM;
		$comp->compgm_email = $request->compGEmail;
		$comp->location_id = $request->compLoc;
		$comp->save();
		return redirect("comp")->with('status', 'Company '.$comp->name.' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
		$comp = company::find($request->id);	
		$m = $comp;
		$comp->delete();
		return redirect("comp")->with('status', 'Company '.$m->name.' deleted successfully');		
    }
}
