<?php

namespace App\Http\Controllers;

use App\config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
	
	    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$url = config::all();
		return view('config.list')->with('url', $url);
	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
			return view('config.index');
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
		$con = config::firstOrCreate(['id'=>1]);
		if($request->has('appName')){
		$con->appName = $request->appName;
		}
		 if ($request->hasFile('leftImg')) {
		$path = $request->file('leftImg')->store('', 'MyDiskDriver');
		$con->leftImg = $path;
		}	
		 if ($request->hasFile('rightImg')) {
		$path = $request->file('rightImg')->store('','MyDiskDriver');
		$con->rightImg = $path;
		}		
		$con->save();
		return redirect('config')->with('status', 'Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
		$con = config::find($request->id);
		return view('config.edit')->with('link', $con);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, config $config)
    {
        //
		$con = config::find($request->id);
		if($request->has('appName')){
		$con->appName = $request->appName;
		}
		 if ($request->hasFile('leftImg')) {
		$path = $request->file('leftImg')->store('', 'MyDiskDriver');
		$con->leftImg = $path;
		}	
		 if ($request->hasFile('rightImg')) {
		$path = $request->file('rightImg')->store('','MyDiskDriver');
		$con->rightImg = $path;
		}		
		$con->save();
		return redirect('config')->with(['status'=>'Updated Successfully', 'link'=>$con]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
			//$con = config::find($request->id);
			//$con->delete();
			//return redirect('config')->with('status', 'Updated Successfully');			
    }
}
