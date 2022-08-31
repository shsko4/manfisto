<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\Penalty;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ReciptModalPenalty extends Component
{
    public $recipt_no;
    public $penalty_id;
    public $penaltyowner_name;
    public $penaltytype_name;
    public $vat;
    public $penalty_amount;
    public $stamp;
    public $total;
    public $acc_user_id;
    public $office_id;
    public $errDiv;
    public $btn_style = 'hidden';
    public $totalinArabic = '';


    public $listeners = ['penalty_details'];

    protected function rules()
    {
        return [
            'recipt_no' => 'unique:accounts|required',
        ];
    }

    protected $messages = [
        'recipt_no.unique' => 'رقم الإيصال موجود مسبقاً!',
        'recipt_no.required' => 'الرجاء إدخال رقم الإيصال!',
    ];


    public function render()
    {
        return view('livewire.recipt-modal-penalty');
    }
//$penalty->id }}','{{ $penalty->penaltyowner->name }}','{{ $penalty->penaltytype->name }}','{{ $penalty->vat }}','{{ $penalty->penalty_amount }}','{{ $penalty->stamp }}','{{ $penalty->total }}
    public function penalty_details($penalty_id = null, $penaltyowner_name = null, $penaltytype_name = null, $vat = null, $penalty_amount = null, $stamp = null, $total = null)
    {
        $obj = new \ArPHP\I18N\Arabic();
        $this->penaltyowner_name = $penaltyowner_name;
        $this->penalty_id = $penalty_id;
        $this->penaltytype_name = $penaltytype_name;
        $this->vat = $vat;
        $this->penalty_amount = $penalty_amount;
        $this->stamp = $stamp;
        $this->total = $total;
        $this->btn_style = 'visiable';
        $this->acc_user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office->id;
        $this->recipt_no = '';
        $this->totalinArabic= $obj->int2str(intval($total)).'  '.'جنيه فقط لاغير';

        //dd($this->transporter_name);
    }

    public function recipt()
    {

        $validatedData = $this->validate();
        //dd($validatedData);
        $penalty = Penalty::find($this->penalty_id);
        if($penalty) {
            $penalty->recipt_no = $this->recipt_no;
            $penalty->status = 2;
            $penalty->save();

            Account::create([
                'model' => 'مخالفه',
                'penalty_id' => $this->penalty_id,
                'name' => $this->penaltyowner_name,
                'user_id' =>$this->acc_user_id,
                'office_id' =>$this->office_id,
                'recipt_no' => $this->recipt_no,
                'total' => $this->total,
            ]);
        }
        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم إدراج رقم الإيصال بنجاح',
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

        $this->emit('addReciptRefresh');
        $this->emit('penRefresh');
        $this->emit('cashRefresh');
    }

    public function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        /*$this->name = '';
        $this->errDiv = '';*/
    }

}
