<?php

namespace App\Http\Controllers;

use App\Models\StockRecipt;
use Illuminate\Http\Request;

class StockReciptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:بورصه');
    }
    public function index()
    {
        return view('stock-recipt.index');
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
     * @param  \App\Models\StockRecipt  $stockRecipt
     * @return \Illuminate\Http\Response
     */
    public function show(StockRecipt $stockRecipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockRecipt  $stockRecipt
     * @return \Illuminate\Http\Response
     */
    public function edit(StockRecipt $stockRecipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockRecipt  $stockRecipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockRecipt $stockRecipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockRecipt  $stockRecipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockRecipt $stockRecipt)
    {
        //
    }
}
