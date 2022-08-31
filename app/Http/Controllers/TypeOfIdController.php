<?php

namespace App\Http\Controllers;

use App\Models\TypeOfId;
use Illuminate\Http\Request;

class TypeOfIdController extends Controller
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
        //
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
     * @param  \App\Models\TypeOfId  $typeOfId
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOfId $typeOfId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeOfId  $typeOfId
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeOfId $typeOfId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeOfId  $typeOfId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOfId $typeOfId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeOfId  $typeOfId
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOfId $typeOfId)
    {
        //
    }
}
