<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;
use App\Models\Manfisto;
use Illuminate\Support\Facades\Auth;

class ReciptModal extends Component
{

    public $recipt_no;
    public $manfisto_id;
    public $transporter_name;
    public $man_no;
    public $car_no;
    public $dest;
    public $vat;
    public $bpt;
    public $bpt2;
    public $total;
    public $acc_user_id;
    public $office_id;
    public $errDiv;
    public $btn_style = 'hidden';
    public $totalinArabic = '';
    public $city = '';

    public $listeners = ['manfisto_details'];

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
        return view('livewire.recipt-modal');
    }

    public function manfisto_details($manfisto_id = null, $transporter_name = null, $man_no = null, $car_no = null, $dest = null, $vat = null, $bpt = null, $bpt2 = null, $total = null,$city = null)
    {
        $obj = new \ArPHP\I18N\Arabic();
        $this->transporter_name = $transporter_name;
        $this->manfisto_id = $manfisto_id;
        $this->man_no = $man_no;
        $this->car_no = $car_no;
        $this->dest = $city;
        $this->vat = $vat;
        $this->bpt = $bpt;
        $this->bpt2 = $bpt2;
        $this->total = $total;
        $this->btn_style = 'visiable';
        $this->acc_user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office->id;
        $this->recipt_no = '';
        $this->totalinArabic= $obj->int2str($total).'  '.'جنيه فقط لاغير';

        //dd($this->transporter_name);
    }

    public function recipt()
    {

        $validatedData = $this->validate();
        //dd($validatedData);
        $manfisto = Manfisto::find($this->manfisto_id);
        if($manfisto) {
            $manfisto->recipt_no = $this->recipt_no;
            $manfisto->status = 2;
            $manfisto->save();

            Account::create([
                'model' => 'منفستو',
                'manfisto_id' => $this->manfisto_id,
                'name' => $manfisto->transporter->name,
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

        $this->transporter_name = '';
        $this->manfisto_id = '';
        $this->man_no = '';
        $this->dest = '';
        $this->car_no = '';
        $this->vat = '';
        $this->bpt = '';
        $this->bpt2 = '';
        $this->total = '';
        $this->recipt_no = '';
        $this->acc_user_id = '';
        $this->office_id = '';
        $this->btn_style = 'hidden';
        $this->totalinArabic = '';

        $this->emit('addReciptRefresh');
        $this->emit('manRefresh');
        $this->emit('cashRefresh');
    }

    public function clearVlaues()
    {
        $this->transporter_name = '';
        $this->manfisto_id = '';
        $this->man_no = '';
        $this->dest = '';
        $this->car_no = '';
        $this->vat = '';
        $this->bpt = '';
        $this->bpt2 = '';
        $this->total = '';
        $this->recipt_no = '';
        $this->btn_style = 'hidden';
        $this->totalinArabic = '';

    }
}
