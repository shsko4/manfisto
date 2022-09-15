<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Custom;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CustomOwner extends Component
{
    public $customowners, $office_id, $user_id, $driver_name, $customowner_id, $car_no,$date_of_trip;
    public $errDiv = '';
    public $updateMode = false;
    public $divId = 'example1';
    public $listeners = ['editPO', 'confirmPenDel'];

    protected function rules()
    {
        return [
            'car_no' => [
                'required',
                Rule::unique('customs')->where(function ($query) {
                    return $query->where('car_no', $this->car_no)
                        ->where('date_of_trip', Carbon::today());
                })

            ],
            'driver_name' => 'required',

        ];
    }


    protected $messages = [

        'driver_name.required' => 'أدخل اسم صاحب العربة',
        'car_no.unique' => 'العربة لديها سجل بتاريخ اليوم',
        'car_no.required' => 'ادخل رقم العربة',
    ];
    public function render()
    {
        $this->customowners = Custom::where('office_id', Auth::user()->office_id)
            ->whereDate('date_of_trip', Carbon::today())->get();
        $this->office_id = Auth::user()->office_id;
        $this->user_id = Auth::user()->id;
        $this->date_of_trip = Carbon::today();
        return view('livewire.custom-owner');
    }

    private function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->emit('refreshLivewireDatatable');
        /*$this->name = '';
        $this->errDiv = '';*/
    }

    public function store()
    {

        $validatedDate = $this->validate();
        $validatedDate['date_of_trip'] = $this->date_of_trip;
        $validatedDate['user_id'] = $this->user_id;
        $validatedDate['office_id'] = $this->office_id;


        Custom::create($validatedDate);

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
    }

    public function editPO($id)
    {

        $customowner = Custom::findOrFail($id);

        $this->customowner_id = $id;
        $this->driver_name = $customowner->driver_name;
        $this->car_no = $customowner->car_no;
        $this->updateMode = true;

        $this->resetErrorBag();

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'car_no' => [
                'required',
                Rule::unique('customs')->where(function ($query) {
                    return $query->where('car_no', $this->car_no)
                        ->where('created_at', Carbon::today())
                        ->where('id','!=',$this->customowner_id);
                })

            ],
            'driver_name' => 'required',
        ]);

        $customowner = Custom::find($this->customowner_id);
        $customowner->update([
            'driver_name' => $this->driver_name,
            'car_no' => $this->car_no,
        ]);

        $this->updateMode = false;

        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم تعديل السجل بنجاح',
            'timer' => 5000,
            'icon' => 'success',
            //'toast'=>true,
            'color' => '#4169E1',
            'background' => 'white',
            'iconColor' => '#4169E1',
            'heightAuto' => false,
            'confirmButtonText' => 'تم',
            'confirmButtonColor' => '#4169E1',
        ]);

        $this->resetInputFields();
    }

    public function delete()
    {
        Custom::find($this->customowner_id)->delete();

        $this->dispatchBrowserEvent('swal-owner-del-modal-hide');

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

        $this->resetInputFields();
    }

    public function confirmPenDel($id)
    {
        //dd($id);
        $this->customowner_id = $id;
        $this->dispatchBrowserEvent('swal-owner-del-modal');
    }
}
