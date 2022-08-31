<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountantCash extends Component
{
    public $todayCash = 0;

    public $listeners = ['cashRefresh' => '$refresh'];
    public function render()
    {
        $cash = DB::table('accounts')
        ->whereDate('created_at', DB::raw('CURDATE()'))
        ->where('office_id', Auth::user()->office->id)
        ->where('user_id', Auth::user()->id)
        ->sum('total');
        if($cash == null){
            $this->todayCash = 0;
        }else{
            $this->todayCash = $cash;
        }
        return view('livewire.accountant-cash');
    }
}
