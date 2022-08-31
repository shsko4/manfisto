<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Manfisto;
use App\Models\Transporter;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class AddManfisto extends Component
{
    public $transporter_id;
    public $transporter_name;
    public $man_no;
    public $car_no;
    public $dest;
    public $size;
    public $nolon = 0;
    public $vat = 0;
    public $bpt = 0;
    public $bpt2 = 0;
    public $total = 0;
    public $user_id;
    public $office_id;
    public $errDiv;
    public $city_id;


    protected $listeners = ['trSelected'];

    public function trSelected(Transporter $transporter)
    {


        $this->transporter_id = $transporter->id;
        $this->transporter_name = $transporter->name;
        $this->man_no = $transporter->next_man;

        //Alert::alert('Title', 'Message', 'Type');

        //d($transporter->user_id);
    }
    public function nolonChanged($nolon)
    {
        dd($nolon);

        $this->nolon = $nolon;
    }

    protected function rules()
    {
        return [
            'man_no' => [
                'required',
                Rule::unique('manfistos')->where(function ($query) {
                    return $query->where('man_no', $this->man_no)
                        ->where('transporter_id', $this->transporter_id);
                })

            ],
            //'transporter_id' => 'required',
            'car_no' => 'required',
            //'dest' => 'required',
            //'city_id' => 'required',
            'nolon' => 'required',
            'vat' => 'required',
            'bpt' => 'required',
            'bpt2' => 'required',
            'user_id' => 'required',
            'office_id' => 'required',
        ];
    }


    protected $messages = [
        'man_no.unique' => 'رقم المنفستو موجود مسبقاً!',
        //'transporter_id.required' => 'أدخل اسم الترحيلات',
        'car_no.required' => 'ادخل رقم العربة',
        'dest.required' => 'ادخل الوجهه',
        'nolon.required' => 'ادخل قيمة النولون ',
        'vat.required' => 'ادخل القيمة المضافة',
        'bpt.required' => 'ادخل قيمة أ.ع',
        'bpt2.required' => 'ادخل قيمة أ.ع',
        'total.required' => 'ادخل مجوع الضريبة واجبة السداد',
        'user_id.required' => 'ادخل اسم مصدر السجل username',
    ];

    public function render()
    {
        if (is_numeric($this->nolon)) {
            $this->vat = $this->nolon * 17 / 100;
            $this->bpt = $this->nolon * 1 / 100;
            $this->bpt2 = $this->nolon * 1 / 100;
            $this->total = round($this->vat + $this->bpt + $this->bpt2);
        } else {
            $this->vat = 0;
            $this->bpt = 0;
            $this->bpt2 = 0;
            $this->total = 0;
        }

        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office->id;
        return view('livewire.add-manfisto');
    }



    public function addManfisto()
    {
        // dd($this->city_id);

        $validatedData = $this->validate();
        $errDiv = '';

        $validatedData['dest'] = 'من الداخل';
        if ($this->transporter_id) {

            if ($this->city_id) {
                $validatedData['city_id'] = $this->city_id;
            } else {
                throw ValidationException::withMessages(['city_id' => 'أدخل الوجهه']);
            }
            //Alert::success('Success Title', 'Success Message');
            $validatedData['transporter_id'] = $this->transporter_id;
            Manfisto::create($validatedData);
            $this->man_no = $this->man_no + 1;
            $this->size = '';
            $this->size = '';
            $this->car_no = '';
            $this->nolon = '';
            $this->vat = '';
            $this->bpt = '';
            $this->bpt2 = '';
            $this->total = '';
            $this->bpt2 = '';

            //SweetAlerts
            $this->dispatchBrowserEvent('swal', [
                'title' => 'تم حفظ المنفستو بنجاح',
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

            $this->emit('manRefresh');
            $this->emit('addReciptRefresh');
        }else{
            $this->dispatchBrowserEvent('swal', [
                'text' => 'قم بإختيار الترحيلات',
                'timer' => 5000,
                'icon' => 'error',
                'title'=> 'خطأ',
                'color' => '#4169E1',
                'background' => 'white',
                //'iconColor' => '#4169E1',
                'heightAuto' => false,
                'confirmButtonText' => 'تم',
                'confirmButtonColor' => '#4169E1',
                //'position'=>'top-left'
            ]);

            $this->transporter_name = '';
        }
    }

    public function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        //$this->emit('refreshLivewireDatatable');
        /*$this->name = '';
        $this->errDiv = '';*/
    }
}
