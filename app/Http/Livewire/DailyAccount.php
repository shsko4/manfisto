<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DailyAccount extends Component
{
    public $listeners = ['dailyAccountRefresh' => '$refresh'];
    public function render()
    {
        $recipts = Account::whereDate('created_at', DB::raw('CURDATE()'))
        ->where('office_id', Auth::user()->office->id)
        ->where('user_id', Auth::user()->id)
        ->orderByDesc('created_at')->get();
        return view('livewire.daily-account',compact('recipts'));
    }
}
