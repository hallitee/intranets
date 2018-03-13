<?php

namespace App\Http\Controllers;
use Auth;
use App\link;
use App\config;
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
		$con =  config::find(1);
		$ip = \Request::ip();	
		if(Auth::guest()){
		$l  = link::where('dept_id', 0)->get();
		
		
		$mv = visitlog::join('links', 'visitlogs.link_id', '=', 'links.id')->selectRaw('link_id, count(*), dept_id, user_ip')->groupBy('link_id')->having('user_ip', '=',$ip)->having('dept_id','=', 0)->orderBy('count(*)', 'desc')->take(6)->get();
		$ld = [];
		}else{
		$l  = link::where('dept_id', 0)->get();
		$mv = visitlog::with('link')->selectRaw('link_id, count(*), user_ip')->groupBy('link_id')->having('user_ip', '=',$ip)->orderBy('count(*)', 'desc')->take(6)->get();			
		$ud = Auth::user();
		$ld = link::where('dept_id', $ud->dept_id)->get();
		}
        return view('index')->with(['links'=>$l,'dept' => $ld, 'mostv'=>$mv, 'con'=>$con]);
    }
}
