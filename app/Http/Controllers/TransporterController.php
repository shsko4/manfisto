<?php

namespace App\Http\Controllers;

use App\Models\Transporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TransporterRequest;

class TransporterController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:عرض مرحل', ['only' => ['index']]);
        $this->middleware('permission:اضافة مرحل', ['only' => ['create', 'store']]);
        $this->middleware('permission:تعديل مرحل', ['only' => ['edit', 'update']]);
        $this->middleware('permission:حذف مرحل', ['only' => ['destroy']]);
    }
    public function index()
    {

        //Alert::success('Success Title', 'Success Message');
        $transporters = Transporter::all();
        return view('transporter.index', compact('transporters'));
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
    public function store(TransporterRequest $request)
    {

        //dd('dd @ stor');
        Transporter::create($request->all());
        session()->flash('success', 'تم اضافة السجل بنجاح ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function show(Transporter $transporter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function edit(Transporter $transporter)
    {
        //dd('dd @ edit'.$transporter);
        return view('transporter.edit', compact('transporter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function update(TransporterRequest $request, Transporter $transporter)
    {
        $transporter->update($request->all());

        session()->flash('success', 'تم تعديل السجل بنجاج');
        return redirect()->route('transporter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transporter $transporter)
    {
        $transporter->delete();
        session()->flash('success', 'تم حذف القسم بنجاح');
        return redirect()->back();
    }
}
