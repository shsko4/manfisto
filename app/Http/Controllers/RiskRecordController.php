<?php

namespace App\Http\Controllers;

use App\Models\RiskRecord;
use App\Http\Requests\StoreRiskRecordRequest;
use App\Http\Requests\UpdateRiskRecordRequest;

class RiskRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:سجل المخاطر');
    }
    public function index()
    {
        return view('risk-record.index');
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
     * @param  \App\Http\Requests\StoreRiskRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskRecord  $riskRecord
     * @return \Illuminate\Http\Response
     */
    public function show(RiskRecord $riskRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskRecord  $riskRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskRecord $riskRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiskRecordRequest  $request
     * @param  \App\Models\RiskRecord  $riskRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskRecordRequest $request, RiskRecord $riskRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskRecord  $riskRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskRecord $riskRecord)
    {
        //
    }
}
