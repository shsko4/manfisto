<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use Illuminate\Validation\Rule;

class ManageCity extends Component
{
    public $localities, $name,$locality_id,$state_id,$city_id;
    public $updateMode = false;

    public $listeners = ['editCity' ,'confirmCityDel'];

    protected function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('cities')->where(function ($query) {
                    return $query->where('name', $this->name)
                        ->where('locality_id', $this->locality_id)
                        ->where('state_id', $this->state_id);
                })

            ],
            'locality_id' => 'required',
            'state_id' => 'required',
        ];
    }


    protected $messages = [
        'name.unique' => 'إسم المدينة مسجل مسبقاً !',
        'locality_id.required' => 'إختر المحلية',
        'state_id.required' => 'إختر الولاية',
    ];

    public function render()
    {
        return view('livewire.manage-city');
    }

    public function store()
    {

        $validatedDate = $this->validate();

        City::create($validatedDate);

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
        //session()->flash('message', 'تم إضافة سجل بنجاح');

        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate();

        $city = City::find($this->locality_id);
        $city->update($validatedDate);


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
            //'position'=>'top-left'
        ]);

        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->emit('refreshLivewireDatatable');
        //$this->emit('DOMContentLoaded');
        /*$this->name = '';
        $this->errDiv = '';*/
    }

    public function editCity($id)
    {
        //dd('mangae');
        $city = City::findOrFail($id);
        $this->city_id = $id;
        $this->locality_id = $city->locality_id;
        $this->state_id = $city->state_id;
        $this->name = $city->name;


        $this->updateMode = true;
        //$this->errDiv = 'ssss';
        $this->resetErrorBag();
        //$this->reset();
    }

    public function delete()
    {
        City::find($this->city_id)->delete();

        $this->dispatchBrowserEvent('swal-city-del-modal-hide');

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

    public function confirmCityDel($id)
    {
        //dd('ffff');
        $this->city_id = $id;
        $this->dispatchBrowserEvent('swal-city-del-modal');
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
}
