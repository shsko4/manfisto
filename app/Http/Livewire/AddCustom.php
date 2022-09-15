<?php

namespace App\Http\Livewire;

use App\Models\Custom;
use App\Models\CustomCertificate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddCustom extends Component
{
    public $model_owner = false;
    public $customownerobj;
    public $custom_id;
    public $name;
    public $driver_name;
    public $cert_no;
    public $cert_recipt_no;
    public $car_no;
    public $serial;
    public $vat = 0;
    public $stamp = 0;
    public $bpt = 0;
    public $nolon = 0;
    public $total = 0;
    public $user_id;
    public $office_id;
    public $listeners = ['setOwnerEvent' => 'setOwner'];

    protected function rules()
    {
        return [
            'name' => 'required',
            'cert_no' => 'required',
            'cert_recipt_no' => 'required',
            'nolon' => 'required',
            'user_id' => 'required',
            'office_id' => 'required',
        ];
    }


    protected $messages = [
        'name.required' => 'ادخل  اسم صاحب الشهاده',
        'cert_no.required' => 'ادخل  رقم الشهاده',
        'cert_recipt_no.required' => 'ادخل  رقم الإيصال الجمركي',
        'nolon.required' => 'ادخل قيمة الشهادة',
        'user_id.required' => 'ادخل اسم مصدر السجل username',
        'office_id.required' => 'المكتب',
    ];

    public function setOwner($id = null)
    {
        $this->model_owner = true;
        $this->custom_id = $id;
        $this->customownerobj = Custom::find($this->custom_id);
        $this->driver_name = $this->customownerobj->driver_name;
        $this->car_no = $this->customownerobj->car_no;
        $this->serial = $this->customownerobj->next_serial;
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
    }
    public function render()
    {
        if (!is_numeric($this->nolon)) {
            $this->nolon = 0;

        }
        $this->vat = $this->nolon*17/100;
        $this->stamp = $this->nolon*1/100;
        $this->bpt = $this->nolon*1/100;
        $this->total = $this->vat + $this->stamp + $this->bpt;
        return view('livewire.add-custom');
    }

    public function resetInputFields()
    {
        //$this->reset();
         $this->name = '';
         $this->cert_no = '';
         $this->cert_recipt_no = '';
         $this->serial = $this->customownerobj->next_serial;
         $this->vat = '';
         $this->stamp = '';
         $this->bpt = '';
         $this->nolon = '';
         $this->total = '';
        $this->resetErrorBag();

    }

    public function resetandback()
    {
        $this->reset();
        $this->resetErrorBag();
    }

    public function store()
    {

        $validatedata = $this->validate();
        $validatedata['custom_id'] = $this->custom_id;
        $validatedata['serial'] = $this->serial;
        $validatedata['vat'] = $this->vat;
        $validatedata['bpt'] = $this->bpt;
        $validatedata['stamp'] = $this->stamp;
        $validatedata['total'] = $this->total;

        //dd($validatedata);
        $newcustomowner = CustomCertificate::create($validatedata);

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
