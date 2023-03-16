<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\RiskRecord as TheModel;

class ManageRiskRecord extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model,$description, $risk_type_id,$risk_batch_id,$risk_degree_id,$risk_possibility_id,$status,
     $model_id,$user_id,$office_id;
    public $updateMode = false;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'status' => 'required',
            'description' => 'required',
            'risk_type_id' => 'required',
            'risk_batch_id' => 'required',
            'risk_degree_id' => 'required',
            'risk_possibility_id' => 'required',
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'status.required' => 'الحالة  مطلوبة !',
    ];

    /*-------------------------------------------------------------------STORE----------*/
    public function store()
    {
        //dump(1);
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
        $this->description = $model->description;
        $this->risk_type_id = $model->risk_type_id;
        $this->risk_batch_id = $model->risk_batch_id;
        $this->risk_degree_id = $model->risk_degree_id;
        $this->risk_possibility_id = $model->risk_possibility_id;
        $this->status = $model->status;

        $this->updateMode = true;

        $this->resetErrorBag();
    }

    /*-------------------------------------------------------------------UPDATE----------*/
    public function update()
    {
        $validatedDate = $this->validate();

        $model = TheModel::find($this->model_id);

        $model->update($validatedDate);
        //dd($this->model_id);


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
    public function render()
    {
        if($this->status == null)
        $this->status = 'نشط';

        return view('livewire.manage-risk-record');
    }
    public function mount()
    {
        $this->status = 'نشط';
    }
}

