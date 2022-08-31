<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PenaltyOwner;
use Illuminate\Support\Facades\Auth;

class PenaltyOwnerComp extends Component
{
    public $penaltyownerscopm;
    public $listeners = ['POrefresh' => 'newCollection'];

    public function newCollection()
    {
        $this->penaltyownerscopm = PenaltyOwner::where('office_id', Auth::user()->office_id)->orderBy('created_at')->get();
        $this->office_id = Auth::user()->office_id;
        return view('livewire.penalty-owner-comp');
    }
    public function render()
    {
        $this->penaltyownerscopm = PenaltyOwner::where('office_id', Auth::user()->office_id)->orderBy('created_at')->get();
        $this->office_id = Auth::user()->office_id;
        return view('livewire.penalty-owner-comp');
    }
}
