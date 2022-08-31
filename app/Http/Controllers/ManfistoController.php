<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManfistoRequest;
use App\Models\Manfisto;
use App\Models\Transporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManfistoController extends Controller
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
        $this->middleware('permission:عرض منفستو', ['only' => ['index']]);
        $this->middleware('permission:اضافة منفستو', ['only' => ['create', 'store']]);
        $this->middleware('permission:تعديل منفستو', ['only' => ['edit', 'update']]);
        $this->middleware('permission:حذف منفستو', ['only' => ['destroy']]);
    }
    public function index()
    {
        //$manfistos = Manfisto::all();
        $manfistos = Manfisto::whereDate('created_at', DB::raw('CURDATE()'))
        ->where('office_id',Auth::user()->office->id)
        ->orderByDesc('created_at')->get();
        return view('manfisto.index', compact('manfistos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transporters = Transporter::all()->sortBy("name");
        return view('manfisto.add', compact('transporters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManfistoRequest $request)
    {
        //dd($request->transporter_name);
        Manfisto::create($request->all());
        session()->flash('success', 'تم اضافة السجل بنجاح ');

        return redirect()->back()
            ->with(['tname' => $request->transporter_name, 'tid' => $request->transporter_name, 'tman_no' => $request->man_no + 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manfisto  $manfisto
     * @return \Illuminate\Http\Response
     */
    public function show(Manfisto $manfisto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manfisto  $manfisto
     * @return \Illuminate\Http\Response
     */
    public function edit(Manfisto $manfisto)
    {
        $transporters = Transporter::all()->sortBy("name");
        return view('manfisto.edit',compact('manfisto','transporters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manfisto  $manfisto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manfisto $manfisto)
    {

        $manfistoUpdate  = Manfisto::findOrFail($manfisto->id);
       // dd($manfistoUpdate);
        $input = $request->all();
        $manfistoUpdate2  = Manfisto::where('id','!=',$manfisto->id)->where('man_no',$input['man_no'])->where('transporter_id',$manfisto->transporter_id);
        //dd($manfistoUpdate->man_no);


        if($input['man_no'] == $manfistoUpdate->man_no){
            //dd($input['city_id']);
            $manfistoUpdate->fill($input)->save();

        session()->flash('success', 'تم تعديل السجل بنجاح ');

        return back();

        }elseif($manfistoUpdate2->count() > 0){

            $data = Manfisto::select(DB::raw('man_no'))
            ->where('man_no', $input['man_no'])
            ->where('transporter_id', $input['transporter_id'])
            ->get();

            return back()->withErrors('رقم المنفستو موجود مسبقاً لهذه الترحيلات');
        }else{
            $manfistoUpdate->fill($input)->save();

        session()->flash('success', 'تم تعديل السجل بنجاح ');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manfisto  $manfisto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manfisto $manfisto)
    {
        $manfisto->delete();
        session()->flash('successfromSide', 'تم حذف المنفستو بنجاح');
        return redirect()->back();
    }
}
