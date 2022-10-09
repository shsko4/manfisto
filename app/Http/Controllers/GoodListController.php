<?php

namespace App\Http\Controllers;

use App\Models\GoodList;
use Illuminate\Http\Request;

class GoodListController extends Controller
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
        return view('setup-goods.index');
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
     * @param  \App\Models\GoodList  $goodList
     * @return \Illuminate\Http\Response
     */
    public function show(GoodList $goodList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoodList  $goodList
     * @return \Illuminate\Http\Response
     */
    public function edit(GoodList $goodList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoodList  $goodList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoodList $goodList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoodList  $goodList
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodList $goodList)
    {
        //
    }
}
