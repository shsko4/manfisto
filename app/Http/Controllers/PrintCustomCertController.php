<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
//use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Custom;
use Illuminate\Http\Request;
use App\Models\CustomCertificate;
use Illuminate\Support\Facades\App;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class PrintCustomCertController extends Controller
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
        return view('reports.print-custom-cert');
    }

    public function print_cert_pdf($id)
    {
       // $image = base64_encode(file_get_contents(public_path('assets/img/wadi-half-logo.png')));
        // retreive all records from db
        $data = [
            'foo' => 'bar'
        ];
        $custom_certs = CustomCertificate::where('custom_id', $id)->get();
        $custom = Custom::find($id);
        $driver_name = $custom->driver_name;
        $car_no = $custom->car_no;
        $total_tax_amount = $custom->total_tax_amount;
        $total_bpt_amount = $custom->total_bpt_amount;
        $total_stamp_amount = $custom->total_stamp_amount;
        $total_vat_amount = $custom->total_vat_amount;
        $recipt_no = $custom->recipt_no;
        $pdf = PDF::loadView('pdf.document', compact('custom_certs','driver_name','car_no','total_tax_amount','recipt_no'));
        return $pdf->stream('document'.Carbon::now().'.pdf');
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
        $custom_certs = CustomCertificate::where('custom_id', $id)->get();
        //dd($custom_certs);
        return view('reports.print-custom-cert', compact('custom_certs'));
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
