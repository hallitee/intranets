<?php

namespace App\Http\Controllers;
use Auth;
use App\link;
use App\depts;
use App\visitlog;
use Illuminate\Http\Request;
use App\Http\Requests\UrlStoreValidation;
use Illuminate\Support\Facades\DB;

class linksController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware(['auth','admin']);
    }
	
    public function index()
    {
        //
		$dept = [];
		$f = depts::with('company.location')->get();
		foreach($f as $a){
			$dept[$a->id]  = $a->name.' '.$a->company->name.' '.$a->company->location->name;
		}
		return view('url.index')->with('dept', $dept);
		
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
    public function store(UrlStoreValidation $request)
    {
		if(count($request->lnkDept)>0){
		foreach($request->lnkDept as $dept){
		 $lnkName = $request->lnkName;
		 $lnkUrl = $request->lnkUrl;
		 $lnkDesc = $request->lnkDesc;
		 $lnkImg = $request->lnkImg;
		 
		 
		 $l = new link;
		 $l->name = $lnkName;
		 $l->descr = $lnkDesc;
		 $l->url = $lnkUrl;
		 $l->dept_id = $dept;
		 if ($request->hasFile('lnkImg')) {
		$path = $request->file('lnkImg')->store('', 'MyDiskDriver');

		$l->img1 = $path;
		}		 
		 $l->save();
		}
		}
		else{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');				
		 $lnkName = $request->lnkName;
		 $lnkUrl = $request->lnkUrl;
		 $lnkDesc = $request->lnkDesc;
		 $lnkImg = $request->lnkImg;
		 
		 
		 $l = new link;
		 $l->name = $lnkName;
		 $l->descr = $lnkDesc;
		 $l->url = $lnkUrl;
		 $l->dept_id = 0;
		 if ($request->hasFile('lnkImg')) {
		$path = $request->file('lnkImg')->store('', 'MyDiskDriver');

		$l->img1 = $path;
		}		 
		 $l->save();
		 DB::statement('SET FOREIGN_KEY_CHECKS=1');	
		}
		 return redirect('url/list')->with('status', 'Saved Successfully');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function show($link)
    {
		$l = link::find($link);
		$ip = \Request::ip();	
		$v = new visitlog;
if(Auth::guest()){
$v->user_ip = $ip;
$v->dest_url = $l->url;
$v->user_id = 0;
$v->link_id = $l->id;
$v->save();
}
else{
$v->user_ip = $ip;
$v->dest_url = $l->url;
$v->user_id = Auth::user()->id;
$v->link_id = $l->id;
$v->save();
}
	return redirect()->away($l->url);
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $link)
    {
        //
		$dept = [];
		$f = depts::with('company.location')->get();
		foreach($f as $a){
			$dept[$a->id]  = $a->name.' '.$a->company->name.' '.$a->company->location->name;
		}
        $l = link::with('dept')->find($link->id);
	    return view('url.edit')->with(['link'=>$l, 'dept'=>$dept]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, link $link)
    {
        //
        $l = link::find($request->id);
        $l->name = $request->lnkName;
        $l->url = $request->lnkUrl;
        $l->descr = $request->lnkDesc;
        $l->name = $request->lnkName;
        if ($request->hasFile('lnkImg')) {
        $path = $request->file('lnkImg')->store('', 'MyDiskDriver');
        $l->img1 = $path;
        }   
        $l->save();             

        return redirect('url/list')->with('status', 'Updated Successfully');
       // $all = link::paginate(5);
      //  return view('url.list')->with(['url'=>$all]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        //
        $l = link::find($req->id);
        $m = $l;
        $l->delete();
        return redirect('url/list')->with('status', $m->name.' '.'deleted Successfully');
    }
}
