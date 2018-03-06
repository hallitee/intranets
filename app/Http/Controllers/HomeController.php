<?php

namespace App\Http\Controllers;
use Auth;
use App\link;
use App\visitlog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$ip = \Request::ip();	
		if(Auth::guest()){
		$l  = link::all();
		$mv = visitlog::with('link')->selectRaw('link_id, count(*), user_ip')->groupBy('link_id')->having('user_ip', '=',$ip)->orderBy('count(*)', 'desc')->take(6)->get();
		}else{
		$l  = link::all();
		$mv = visitlog::with('link')->selectRaw('link_id, count(*), user_ip')->groupBy('link_id')->having('user_ip', '=',$ip)->orderBy('count(*)', 'desc')->take(6)->get();			
			
		}
        return view('index')->with(['links'=>$l, 'mostv'=>$mv]);
    }
}
