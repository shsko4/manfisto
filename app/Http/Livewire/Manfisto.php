<?php

namespace App\Http\Livewire;

use Livewire\Component;
use function Termwind\render;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\Models\Manfisto as ManLivewire;

class Manfisto extends Component
{
    public $count = 11;
    public $random = 0;
    public $manfistosL = null;
    protected $listeners = ['manRefresh'  => '$refresh'];

    public function render()
    {
        $this->random = random_int(1, 1000000000);
        $manfistos = ManLivewire::whereDate('created_at', DB::raw('CURDATE()'))
            ->where('office_id', Auth::user()->office->id)
            ->orderByDesc('created_at')->get();
            //$this->emit('addReciptRefresh');
        return view('livewire.manfisto', compact('manfistos'));
    }
}
