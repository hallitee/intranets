<?php

namespace App\Http\Controllers;

use App\User;
use App\company;
use Illuminate\Http\Request;

class userController extends Controller
{
	 public function __construct()
    {
       $this->middleware(['auth', 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$u =  User::with('dept.company.location')->paginate(5);
		return view('auth.list')->with('user', $u);
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
		$comp = company::with('location')->get();
		$all =  [];
		foreach($comp as $c){
		$all[$c->id] = $c->name.' '.$c->location->name;
			
		}
		$user = User::with('dept.company.location')->find($request->id);
		return view('auth.edit')->with(['user'=>$user,'comp'=>$all]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
	$user = User::with('dept.company.location')->find($request->id);
	$user->name = $request->uName;
	$user->email = $request->uEmail;
	if($request->has('uPassword')){
		$user->password = bcrypt($request->uPassword);
	}
	$user->admin = $request->uRole;

	$user->company_id = $request->uComp;
	$user->dept_id = $request->uDept;
	$user->save();
	return redirect('user')->with('status', 'User updated successfully');
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
		$user = User::with('dept.company.location')->find($request->id);
		$user->delete();
		return redirect('user')->with('status', 'User deleted successfully');
		
    }
}
