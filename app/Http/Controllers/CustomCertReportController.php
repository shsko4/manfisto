<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomCertificate;
use Illuminate\Support\Facades\DB;

class CustomCertReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:تقارير جمارك');
    }

    public function index()
    {
        //$custom_certs = CustomCertificate::all();
        //dd($custom_certs);
        return view('reports.custom-cert-report');
    }

    public function get_custom_cert(Request $request)
    {

        $radio = $request->radio;
        $custom_certs = CustomCertificate::all();
        if ($radio == 1) {
            if ($request->start_at == '' && $request->end_at == '') {
                $custom_certs = CustomCertificate::all();
                return view('reports.custom-cert-report', compact('custom_certs'));
            } else {
                $start_at = date($request->start_at);
                $end_at = date($request->end_at);
                $custom_certs = CustomCertificate::whereBetween(DB::raw('date(created_at)'),[$start_at,$end_at])->get();
                return view('reports.custom-cert-report', compact('custom_certs','start_at','end_at'));
            }
        }

        return view('reports.custom-cert-report', compact('custom_certs'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $custom_certs = CustomCertificate::where('custom_id',$id)->get();
        return view('reports.custom-cert-report',compact('custom_certs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
