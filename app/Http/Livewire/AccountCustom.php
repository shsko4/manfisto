<?php

namespace App\Http\Livewire;

use App\Models\Custom;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountCustom extends Component
{
    public $listeners = ['addReciptRefresh', 'custom_details'];
    //public $listeners = ['addReciptRefresh' => '$refresh','manfisto_details'];
    //public $listeners = ['addReciptRefresh' => 'newRecord'];

    public $active = 0;
    public $thedate = false;
    public $customs;
    public function addReciptRefresh()
    {
        if ($this->thedate) {
            $this->customs = Custom::whereDate('created_at',  DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        } else {
            //  dd('55');
            $this->customs = Custom::whereDate('created_at', '!=', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        }
    }
    public function custom_details($model_id = null)
    {
        $this->active = $model_id;
        //dd($manfisto_id);
    }
    public function newRecord()
    {
        //dd('df');
        /*$manfistos = Manfisto::whereDate('created_at', DB::raw('CURDATE()'))
        ->where('office_id', Auth::user()->office->id)
        ->where('recipt_no',null)
        ->orderBy('created_at')->get();
        //$this->emit('manRefresh');
    return view('livewire.account-manfisto',compact('manfistos'));*/
    }

    public function mount()
    {

        if (!session()->has('thedate')) {
            $this->thedate = true;
            $this->customs = Custom::whereDate('created_at',  DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        } else {
            //  dd('55');
            $this->customs = Custom::whereDate('created_at', '!=', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        }
    }

    public function render()
    {


        //$this->active = 0;
        return view('livewire.account-custom', ['customs', $this->customs]);
    }
    /*public function render()
    {
        return view('livewire.account-custom');
    }*/
}
