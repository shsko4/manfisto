<?php

namespace App\Http\Livewire;

use App\Models\Custom;
use App\Models\Account;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ReciptCustomModal extends Component
{
    public $recipt_no;
    public $custom_id;
    public $driver_name;
    public $car_no;
    public $vat;
    public $bpt;
    public $stamp;
    public $total;
    public $acc_user_id;
    public $office_id;
    public $errDiv;
    public $btn_style = 'hidden';
    public $totalinArabic = '';
    public $city = '';

    public $listeners = ['custom_details'];

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


    public function custom_details($custom_id = null)
    {
        $customobj = Custom::find($custom_id);
        $obj = new \ArPHP\I18N\Arabic();
        $this->driver_name = $customobj->driver_name;
        $this->custom_id = $custom_id;

        $this->car_no = $customobj->car_no;

        $this->vat = $customobj->total_vat_amount;
        $this->bpt = $customobj->total_bpt_amount;
        $this->stamp = $customobj->total_stamp_amount;
        $this->total = $customobj->total_tax_amount;
        $this->btn_style = 'visiable';
        $this->acc_user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office->id;
        $this->recipt_no = '';
        $this->totalinArabic= $obj->int2str(round($this->total)).'  '.'جنيه فقط لاغير';

        //dd($this->transporter_name);
    }

    public function recipt()
    {

        $validatedData = $this->validate();
        //dd($validatedData);
        $custom = Custom::find($this->custom_id);
        if($custom) {
            $custom->recipt_no = $this->recipt_no;
            //$manfisto->status = 2;
            $custom->save();

            Account::create([
                'model' => 'شهاده جمارك',
                'custom_id' => $this->custom_id,
                'name' => $custom->driver_name,
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

       /* $this->transporter_name = '';
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
        $this->totalinArabic = '';*/

        $this->clearVlaues();

        $this->emit('addReciptRefresh');
        $this->emit('manRefresh');
        $this->emit('cashRefresh');
    }

    public function clearVlaues()
    {
       /* $this->transporter_name = '';
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
        $this->totalinArabic = '';*/

        $this->reset();
        $this->resetErrorBag();

    }
    public function render()
    {
        return view('livewire.recipt-custom-modal');
    }
}
