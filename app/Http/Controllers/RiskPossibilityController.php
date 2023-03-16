<?php

namespace App\Http\Controllers;

use App\Models\RiskPossibility;
use App\Http\Requests\StoreRiskPossibilityRequest;
use App\Http\Requests\UpdateRiskPossibilityRequest;

class RiskPossibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('permission:حزم المخاطر');
    }
    public function index()
    {
        return view('risk-possibility.index');
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
     * @param  \App\Http\Requests\StoreRiskPossibilityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskPossibilityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskPossibility  $riskPossibility
     * @return \Illuminate\Http\Response
     */
    public function show(RiskPossibility $riskPossibility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskPossibility  $riskPossibility
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskPossibility $riskPossibility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiskPossibilityRequest  $request
     * @param  \App\Models\RiskPossibility  $riskPossibility
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskPossibilityRequest $request, RiskPossibility $riskPossibility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskPossibility  $riskPossibility
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskPossibility $riskPossibility)
    {
        //
    }
}
