<?php

namespace App\Http\Controllers;

use App\link;
use Illuminate\Http\Request;
use App\Http\Requests\UrlStoreValidation;
class linksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
			
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(link $link)
    {
        //
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
