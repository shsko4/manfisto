<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\Item as TheModel;
use Illuminate\Support\Facades\Auth;

class ManageItem extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model, $name, $model_id, $user_id, $office_id;
    public $category_id;
    public $updateMode = false;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel', 'devicesSelect'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'name' => ['required',Rule::unique('categories', 'id')->ignore($this->model_id)],
            'category_id' => 'required'
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'name.unique' => ' اسم البضاعة مسجل مسبقاً !',
        'category_id.required' => 'يجب إختيار تصنيف البضاعه',
    ];

    /*-------------------------------------------------------------------STORE----------*/
    public function store()
    {
        $validatedata = $this->validate();
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
        $validatedata['user_id'] = $this->user_id;
        $validatedata['office_id'] = $this->office_id;
        TheModel::create($validatedata);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم حفظ السجل بنجاح',
            'timer' => 5000,
            'icon' => 'success',
            'color' => '#4169E1',
            'background' => 'white',
            'iconColor' => '#4169E1',
            'heightAuto' => false,
            'confirmButtonText' => 'تم',
            'confirmButtonColor' => '#4169E1',
        ]);


        $this->resetInputFields();
    }

    /*-------------------------------------------------------------------EDIT----------*/
    public function editModel($id)
    {
        $model = TheModel::findOrFail($id);
        $this->model_id = $id;
        $this->category_id = $model->category_id;
        //dd($this->category_id);
        $this->name = $model->name;

        $this->updateMode = true;
        $this->dispatchBrowserEvent('DOMContentLoaded');
        $this->resetErrorBag();
    }

    /*-------------------------------------------------------------------UPDATE----------*/
    public function update()
    {
        $validatedDate = $this->validate();

        $model = TheModel::find($this->model_id);
        $model->update($validatedDate);


        $this->updateMode = false;

        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم تعديل السجل بنجاح',
            'timer' => 5000,
            'icon' => 'success',
            'color' => '#4169E1',
            'background' => 'white',
            'iconColor' => '#4169E1',
            'heightAuto' => false,
            'confirmButtonText' => 'تم',
            'confirmButtonColor' => '#4169E1',
        ]);

        $this->resetInputFields();
    }

    /*-------------------------------------------------------------------RESET----------*/
    private function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->emit('refreshLivewireDatatable');
        //$this->dispatchBrowserEvent('DOMContentLoaded');
    }


    /*-------------------------------------------------------------------CONFIRM DELETE----------*/
    public function confirmModelDel($id)
    {
        $this->model_id = $id;
        $this->dispatchBrowserEvent('swal-del-modal');
    }

    /*-------------------------------------------------------------------DELETE----------*/
    public function delete()
    {
        TheModel::find($this->model_id)->delete();

        $this->dispatchBrowserEvent('swal-del-modal-hide');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'تم حذف السجل بنجاح',
            'timer' => 5000,
            'icon' => 'success',
            'color' => '#4169E1',
            'background' => 'white',
            'iconColor' => '#4169E1',
            'heightAuto' => false,
            'confirmButtonText' => 'تم',
            'confirmButtonColor' => '#4169E1',

        ]);

        $this->resetInputFields();
    }

    /*-------------------------------------------------------------------CANCEL----------*/
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /*-------------------------------------------------------------------RENDER----------*/
    public function render()
    {
        $this->dispatchBrowserEvent('DOMContentLoaded');
        return view('livewire.manage-item');
    }
}
