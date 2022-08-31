<?php

namespace App\Http\Controllers;

use App\Models\PenaltyOwner;
use Illuminate\Http\Request;

class PenaltyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:الاعدادات');
    }
    public function index()
    {
        session()->flash('editpenalty','owner');
        $penaltyownersC = PenaltyOwner::all();
        return view('penaltyowner.index',compact('penaltyownersC'));
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
     * @param  \App\Models\PenaltyOwner  $penaltyOwner
     * @return \Illuminate\Http\Response
     */
    public function show(PenaltyOwner $penaltyOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenaltyOwner  $penaltyOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(PenaltyOwner $penaltyOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenaltyOwner  $penaltyOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenaltyOwner $penaltyOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenaltyOwner  $penaltyOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenaltyOwner $penaltyOwner)
    {
        //
    }
}
