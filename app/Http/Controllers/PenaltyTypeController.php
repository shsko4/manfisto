<?php

namespace App\Http\Controllers;

use App\Models\PenaltyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenaltyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('permission:المخالفات');
        $this->middleware('permission:الاعدادات');
    }
    public function index()
    {
        $penaltytypes = PenaltyType::where('office_id',Auth::user()->office_id)->get();
        return view('penaltytype.index',compact('penaltytypes'));
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
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Http\Response
     */
    public function show(PenaltyType $penaltyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Http\Response
     */
    public function edit(PenaltyType $penaltyType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenaltyType $penaltyType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenaltyType  $penaltyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenaltyType $penaltyType)
    {
        //
    }
}
