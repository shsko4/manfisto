<?php

namespace App\Http\Livewire;

use App\Models\Transporter;
use Livewire\Component;
use Livewire\WithPagination;

class TransporterSearch extends Component
{
    use WithPagination;

    public $transporter_id;
    public $transporter_name;
    public $man_no;
    
    public function render()
    {
        $transporters = Transporter::all();
        return view('livewire.transporter-search',compact('transporters'));
    }
}
