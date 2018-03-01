<?php

namespace App\Http\Controllers;
use Auth;
use App\link;
use App\visitlog;
use Illuminate\Http\Request;
use App\Http\Requests\UrlStoreValidation;
class linksController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
	
    public function index()
    {
        //
		return view('url.index');
		
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
     
		 $lnkName = $request->lnkName;
		 $lnkUrl = $request->lnkUrl;
		 $lnkDesc = $request->lnkDesc;
		 $lnkImg = $request->lnkImg;
		 
		 
		 $l = new link;
		 $l->name = $lnkName;
		 $l->descr = $lnkDesc;
		 $l->url = $lnkUrl;
		 if ($request->hasFile('lnkImg')) {
		$path = $request->file('lnkImg')->store('', 'MyDiskDriver');
		echo $path;
		$l->img1 = $path;
		}		 
		 $l->save();
		 return view('url.index');
		
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
    public function edit(link $link)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(link $link)
    {
        //
    }
}
