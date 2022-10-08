<?php

namespace App\Http\Controllers;

use App\Models\Load;
use Illuminate\Http\Request;

class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:حموله');
    }
    public function index()
    {
        return view('load.index');
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
     * @param  \App\Models\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function show(Load $load)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function edit(Load $load)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Load $load)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function destroy(Load $load)
    {
        //
    }
}
