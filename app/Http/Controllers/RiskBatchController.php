<?php

namespace App\Http\Controllers;

use App\Models\RiskBatch;
use App\Http\Requests\StoreRiskBatchRequest;
use App\Http\Requests\UpdateRiskBatchRequest;

class RiskBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:حزم المخاطر');
    }
    public function index()
    {
        return view('risk-batch.index');
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
     * @param  \App\Http\Requests\StoreRiskBatchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskBatchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskBatch  $riskBatch
     * @return \Illuminate\Http\Response
     */
    public function show(RiskBatch $riskBatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskBatch  $riskBatch
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskBatch $riskBatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiskBatchRequest  $request
     * @param  \App\Models\RiskBatch  $riskBatch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskBatchRequest $request, RiskBatch $riskBatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskBatch  $riskBatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskBatch $riskBatch)
    {
        //
    }
}
