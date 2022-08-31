<?php

namespace App\Http\Controllers;

use App\Models\Penalty;
use App\Models\Manfisto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:التقارير');
    }

    public function penaltyreport($date = null)
    {
        $penalties = Penalty::where('office_id',Auth::user()->office->id)
        ->orderByDesc('created_at')->get();
       /* $penalties = Penalty::whereDate('created_at', DB::raw('CURDATE()'))
        ->where('office_id',Auth::user()->office->id)
        ->orderByDesc('created_at')->get();*/
        return view('reports.penalty_report',compact('penalties'));
    }
    public function manfistoreport($date = null)
    {
        //$manfistos = Manfisto::all();
        $manfistos = Manfisto::where('office_id',Auth::user()->office->id)
        ->orderByDesc('created_at')->get();
        /*$manfistos = Manfisto::whereDate('created_at', DB::raw('CURDATE()'))
        ->where('office_id',Auth::user()->office->id)
        ->orderByDesc('created_at')->get();*/
        return view('manfisto.index', compact('manfistos'));
    }
}
