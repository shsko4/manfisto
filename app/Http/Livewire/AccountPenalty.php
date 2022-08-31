<?php

namespace App\Http\Livewire;

use App\Models\Penalty;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountPenalty extends Component
{
    public $listeners = ['addReciptRefresh','penalty_details'];
    //public $listeners = ['addReciptRefresh' => '$refresh','penalty_details'];
    public $active = 0;
    public $penalties = 0;

    public function addReciptRefresh()
    {
        if(!session()->has('thedate')){
            $this->penalties = Penalty::whereDate('created_at', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no',null)
                ->orderBy('created_at')->get();
            }else{

                $this->penalties = Penalty::whereDate('created_at','!=', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no',null)
                ->orderBy('created_at')->get();
            }
    }

    public function penalty_details($penalty_id = null)
    {
        $this->active = $penalty_id;
        //dd($manfisto_id);
    }

    public function newRecord()
    {
        dd('newRecord');
    }

    public function mount()
    {
        if(!session()->has('thedate')){
            $this->penalties = Penalty::whereDate('created_at', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no',null)
                ->orderBy('created_at')->get();
            }else{

                $this->penalties = Penalty::whereDate('created_at','!=', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no',null)
                ->orderBy('created_at')->get();
            }
    }

    public function render()
    {
        //$this->active = 0;
        return view('livewire.account-penalty',['penalties',$this->penalties]);
    }
}
