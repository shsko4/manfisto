<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Manfisto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountManfisto extends Component
{
    public $listeners = ['addReciptRefresh', 'manfisto_details'];
    //public $listeners = ['addReciptRefresh' => '$refresh','manfisto_details'];
    //public $listeners = ['addReciptRefresh' => 'newRecord'];

    public $active = 0;
    public $thedate = false;
    public $manfistos;
    public function addReciptRefresh()
    {
        if ($this->thedate) {
            $this->manfistos = Manfisto::whereDate('created_at',  DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        } else {
            //  dd('55');
            $this->manfistos = Manfisto::whereDate('created_at', '!=', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        }
    }
    public function manfisto_details($manfisto_id = null)
    {
        $this->active = $manfisto_id;
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
            $this->manfistos = Manfisto::whereDate('created_at',  DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        } else {
            //  dd('55');
            $this->manfistos = Manfisto::whereDate('created_at', '!=', DB::raw('CURDATE()'))
                ->where('office_id', Auth::user()->office->id)
                ->where('recipt_no', null)
                ->orderBy('created_at')->get();
        }
    }

    public function render()
    {


        //$this->active = 0;
        return view('livewire.account-manfisto', ['manfistos', $this->manfistos]);
    }
}
