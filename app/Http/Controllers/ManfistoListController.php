<?php

namespace App\Http\Controllers;

use App\Models\ManfistoList;
use Illuminate\Http\Request;

class ManfistoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:لوائح');
    }
    public function index()
    {
        return view('setup-manfisto.index');
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
     * @param  \App\Models\ManfistoList  $manfistoList
     * @return \Illuminate\Http\Response
     */
    public function show(ManfistoList $manfistoList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManfistoList  $manfistoList
     * @return \Illuminate\Http\Response
     */
    public function edit(ManfistoList $manfistoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManfistoList  $manfistoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManfistoList $manfistoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManfistoList  $manfistoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManfistoList $manfistoList)
    {
        //
    }
}
