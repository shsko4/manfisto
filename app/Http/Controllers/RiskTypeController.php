<?php

namespace App\Http\Controllers;

use App\Models\RiskType;
use App\Http\Requests\StoreRiskTypeRequest;
use App\Http\Requests\UpdateRiskTypeRequest;

class RiskTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:انواع المخاطر');
    }
    public function index()
    {
        return view('risk-type.index');
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
     * @param  \App\Http\Requests\StoreRiskTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskType  $riskType
     * @return \Illuminate\Http\Response
     */
    public function show(RiskType $riskType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskType  $riskType
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskType $riskType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiskTypeRequest  $request
     * @param  \App\Models\RiskType  $riskType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskTypeRequest $request, RiskType $riskType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskType  $riskType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskType $riskType)
    {
        //
    }
}
