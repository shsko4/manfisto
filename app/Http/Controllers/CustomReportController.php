<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class CustomReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:تقارير جمارك');
    }

    public function index()
    {
        return view('reports.custom-report');
    }

    public function search_custom(Request $request)
    {
        $radio = $request->radio;
        $customs = Custom::all();
        if ($radio == 1) {
            if ($request->start_at == '' && $request->end_at == '') {
                $customs = Custom::all();
                return view('reports.custom-report', compact('customs'));
            } else {
                $start_at = date($request->start_at);
                $end_at = date($request->end_at);
                $customs = Custom::whereBetween('date_of_trip',[$start_at,$end_at])->get();
                return view('reports.custom-report', compact('customs','start_at','end_at'));
            }
        }

        return view('reports.custom-report', compact('customs'));
    }

    public function custom_pdf(Request $request)
    {
        dd($request->start_at);
    }
}
