<?php

namespace App\Http\Controllers;
use Auth;
use App\link;
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
		}else{
			
			
		}
		$mv=0;

        return view('index')->with(['links'=>$l, 'mostv'=>$mv]);
    }
}
