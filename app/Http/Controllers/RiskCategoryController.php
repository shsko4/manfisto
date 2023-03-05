<?php

namespace App\Http\Controllers;

use App\Models\RiskCategory;
use App\Http\Requests\StoreRiskCategoryRequest;
use App\Http\Requests\UpdateRiskCategoryRequest;

class RiskCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:تصنيفات المخاطر');
    }
    public function index()
    {
        return view('risk-category.index');
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
     * @param  \App\Http\Requests\StoreRiskCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskCategory  $riskCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RiskCategory $riskCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskCategory  $riskCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskCategory $riskCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiskCategoryRequest  $request
     * @param  \App\Models\RiskCategory  $riskCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskCategoryRequest $request, RiskCategory $riskCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskCategory  $riskCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskCategory $riskCategory)
    {
        //
    }
}
