<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class CustomReportController extends Controller
{
    public function index()
    {
        return view('reports.custom-report');
    }

    public function search_custom()
    {
        $customs = Custom::all();
        return view('reports.custom-report',compact('customs'));
    }
}
