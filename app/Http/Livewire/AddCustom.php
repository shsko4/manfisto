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
    public $customcert_del_id;
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
    public $listeners = ['setOwnerEvent' => 'setOwner','confirmCertDel'];

    protected function rules()
    {
        return [
            'name' => 'required',
            'cert_no' => 'required|unique:custom_certificates',
            'cert_recipt_no' => 'required',
            'nolon' => 'required',
            'user_id' => 'required',
            'office_id' => 'required',
        ];
    }


    protected $messages = [
        'name.required' => 'ادخل  اسم صاحب الشهاده',
        'cert_no.required' => 'ادخل  رقم الشهاده',
        'cert_no.unique' => 'الشهاده موجوده مسبقا',
        'cert_recipt_no.required' => 'ادخل  رقم الإيصال الجمركي',
        'nolon.required' => 'ادخل قيمة الشهادة',
        'user_id.required' => 'ادخل اسم مصدر السجل username',
        'office_id.required' => 'المكتب',
    ];

    public function confirmCertDel($cert_id = null)
    {
        //dd($cert_id);
        $this->customcert_del_id = $cert_id ;
        //dd($this->customcert_del_id);
        $this->dispatchBrowserEvent('swal-cert-del-modal');
    }

    public function delete()
    {
        //dd($this->customcert_del_id);
        CustomCertificate::find($this->customcert_del_id)->delete();

        $this->dispatchBrowserEvent('swal-cert-del-modal-hide');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم حذف السجل بنجاح',
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
        //session()->flash('message', 'تم مسح السجل بنجاح');
        $this->resetInputFields();
    }



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
        if (!is_numeric($this->cert_recipt_no)) {
            $this->cert_recipt_no = 0;

        }

        $this->nolon = round($this->cert_recipt_no*100/17);
        $this->vat = round($this->nolon*120/100*17/100-$this->cert_recipt_no);
        $this->stamp = round($this->nolon/100);
        $this->bpt = round($this->nolon*5/100);
        $this->total = round($this->vat + $this->stamp + $this->bpt);
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
        $this->emit('refreshLivewireDatatable');

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

        $this->emit('refreshLivewireDatatable');
    }
}
