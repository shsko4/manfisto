<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Category as TheModel;
use Illuminate\Support\Facades\Auth;

class ManageCategory extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model, $name, $model_id,$user_id,$office_id;
    public $updateMode = false;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'name' => 'required|unique:categories'
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'name.unique' => ' التصنيف مسجل مسبقاً !',
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
        //dd($id);
        $model = TheModel::findOrFail($id);
        $this->model_id = $id;
        $this->name = $model->name;

        $this->updateMode = true;

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
        return view('livewire.manage-category');
    }
}
