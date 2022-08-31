<?php

namespace App\Http\Livewire;

use App\Models\Penalty;
use Livewire\Component;
use App\Models\PenaltyOwner;
use Illuminate\Support\Facades\Auth;

class AddPenalty extends Component
{
    public $penaltyowner = false;
    public $penalty_owner_id;
    public $penaltyowner_name;
    public $location;
    public $car_no;
    public $penalty_type_id;
    public $vat = 0;
    public $penalty_amount = 0;
    public $stamp = 0;
    public $tax3 = 0;
    public $tax4 = 0;
    public $total = 0;
    public $note;
    public $user_id;
    public $office_id;
    public $listeners = ['setOwnerEvent' => 'setOwner'];

    protected function rules()
    {
        return [
            'penalty_owner_id' => 'required',
            'penalty_type_id' => 'required',
            'user_id' => 'required',
            'office_id' => 'required',
        ];
    }


    protected $messages = [
        'penalty_owner_id.required' => 'أدخل اسم صاحب المخالفة',
        'penalty_type_id.required' => 'ادخل نوع المخالفة',
        'user_id.required' => 'ادخل اسم مصدر السجل username',
        'office_id.required' => 'المكتب',
    ];

    public function setOwner($id = null)
    {
        $this->penaltyowner = true;
        $this->penalty_owner_id = $id;
        $penaltyownerobj = PenaltyOwner::find($this->penalty_owner_id);
        $this->penaltyowner_name = $penaltyownerobj->name;
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
    }
    public function render()
    {
        if (!is_numeric($this->vat)) {
            $this->vat = 0;

        }

        if (!is_numeric($this->penalty_amount)) {
            $this->penalty_amount = 0;

        }

        if (!is_numeric($this->stamp)) {
            $this->stamp = 0;

        }

        $this->total = $this->vat + $this->penalty_amount + $this->stamp;
        return view('livewire.add-penalty');
    }

    public function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        //$this->emit('refreshLivewireDatatable');
        /*$this->name = '';
        $this->errDiv = '';*/
    }

    public function store()
    {

        $validatedata = $this->validate();
        $validatedata['location'] = $this->location;
        $validatedata['car_no'] = $this->car_no;
        $validatedata['vat'] = $this->vat;
        $validatedata['penalty_amount'] = $this->penalty_amount;
        $validatedata['stamp'] = $this->stamp;
        $validatedata['tax3'] = 0;
        $validatedata['tax4'] = 0;
        $validatedata['total'] = $this->total;
        $validatedata['note'] = $this->note;
        //dd($validatedata);
        $newpenaltyowner = Penalty::create($validatedata);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم حفظ السجل بنجاح',
            'timer' => 5000,
            'icon' => 'success',
            //'toast'=>true,
            'color' => '#4169E1',
            'background' => 'white',
            'iconColor' => '#4169E1',
            'heightAuto' => false,
            'confirmButtonText' => 'تم',
            'confirmButtonColor' => '#4169E1',
            //'position'=>'top-left'
        ]);

        $this->resetInputFields();

        $this->emit('penRefresh');
    }
}
