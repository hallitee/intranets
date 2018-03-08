<?php

namespace App\Http\Controllers;

use App\depts;
use App\company;
use App\location;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$dept = depts::with('company')->paginate(5);
		$comp = [];
		foreach($dept as $key=>$d){
			$c = company::with('location')->find($d->company->id);
			$comp[$key] = $c->name.' '.$c->location->name;
		}
		return view('dept.list')->with(['dept'=>$dept, 'comp'=>$comp]);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$comp = [];
		$all  = company::with('location')->get();
		foreach($all as $c){
			$comp[$c->id]=$c->name.' '.$c->location->name;
		}
		return view('dept.index')->with('comp', $comp);
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
		$dept = new depts;
		$dept->name = strtoupper($request->deptName);
		$dept->description = $request->deptDesc;
		$dept->dept_hod = $request->deptHod;
		$dept->depthod_email = $request->deptHEmail;
		$dept->company_id = $request->compId;
		$dept->save();
		return redirect('dept')->with('status', $dept->name.' department created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\depts  $depts
     * @return \Illuminate\Http\Response
     */
    public function show(depts $depts)
    {
        //
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\depts  $depts
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
		$dept = depts::with('company')->find($request->id);
		$comp = [];
		$all  = company::with('location')->get();
		foreach($all as $c){
			$comp[$c->id]=$c->name.' '.$c->location->name;
		}
		return view('dept.edit')->with(['dept'=>$dept, 'comp'=>$comp]);		

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\depts  $depts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depts $depts)
    {
        //
		$dept =  depts::find($request->id);
		$dept->name = $request->deptName;
		$dept->description = $request->deptDesc;
		$dept->dept_hod = $request->deptHod;
		$dept->depthod_email = $request->deptHEmail;
		$dept->company_id = $request->compId;
		$dept->save();
		return redirect('dept')->with('status', $dept->name.' department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\depts  $depts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
				$dept =  depts::find($request->id);
				$m = $dept;
				$dept->delete();
				return redirect('dept')->with('status', $m->name.' department deleted successfully');
    }
}
