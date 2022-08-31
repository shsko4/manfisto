<?php

namespace App\Http\Livewire;

use App\Models\Penalty;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TodayPenalty extends Component
{
    public $count = 11;
    public $random = 0;
    public $penalties;
    protected $listeners = ['penRefresh'  => '$refresh'];
    public function render()
    {
        //$this->random = random_int(1, 1000000000);
        $this->penalties = Penalty::whereDate('created_at', DB::raw('CURDATE()'))
            ->where('office_id', Auth::user()->office->id)
            ->orderByDesc('created_at')->get();
            //$this->emit('addReciptRefresh');
        return view('livewire.today-penalty');
    }
}
