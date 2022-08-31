<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Locality;
use Illuminate\Validation\Rule;

class ManageLocality extends Component
{
    public $localities, $name,$locality_id,$state_id;
    public $updateMode = false;

    public $listeners = ['editLocality' ,'confirmLocalityDel'];

    protected function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('localities')->where(function ($query) {
                    return $query->where('name', $this->name)
                        ->where('state_id', $this->state_id);
                        //->where('id','!=',$this->penaltyowner_id);
                })

            ],
            'state_id' => 'required',
        ];
    }


    protected $messages = [
        'name.unique' => 'إسم المحلية مسجل مسبقاً بالولاية!',
        'state_id.required' => 'إختر الولاية',
    ];

    public function render()
    {
        return view('livewire.manage-locality');
    }

    public function store()
    {

        $validatedDate = $this->validate();

        Locality::create($validatedDate);

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

        $penaltyowner = Locality::find($this->locality_id);
        $penaltyowner->update($validatedDate);


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

    public function editLocality($id)
    {
        //dd('mangae');
        $locality = Locality::findOrFail($id);
        $this->locality_id = $id;
        $this->state_id = $locality->state_id;
        $this->name = $locality->name;


        $this->updateMode = true;
        //$this->errDiv = 'ssss';
        $this->resetErrorBag();
        //$this->reset();
    }

    public function delete()
    {
        Locality::find($this->locality_id)->delete();

        $this->dispatchBrowserEvent('swal-locality-del-modal-hide');

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

    public function confirmLocalityDel($id)
    {
        //dd('ffff');
        $this->locality_id = $id;
        $this->dispatchBrowserEvent('swal-locality-del-modal');
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
}
