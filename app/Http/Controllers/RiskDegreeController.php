<?php

namespace App\Http\Controllers;

use App\Models\RiskDegree;
use App\Http\Requests\StoreRiskDegreeRequest;
use App\Http\Requests\UpdateRiskDegreeRequest;

class RiskDegreeController extends Controller
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
        return view('risk-degree.index');
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
     * @param  \App\Http\Requests\StoreRiskDegreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskDegreeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskDegree  $riskDegree
     * @return \Illuminate\Http\Response
     */
    public function show(RiskDegree $riskDegree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskDegree  $riskDegree
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskDegree $riskDegree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiskDegreeRequest  $request
     * @param  \App\Models\RiskDegree  $riskDegree
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskDegreeRequest $request, RiskDegree $riskDegree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskDegree  $riskDegree
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskDegree $riskDegree)
    {
        //
    }
}
