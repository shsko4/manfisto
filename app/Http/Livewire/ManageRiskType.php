<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\RiskType as TheModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ManageRiskType extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model, $name,$status,$risk_category_id, $model_id,$user_id,$office_id;
    public $updateMode = false;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'name' => ['required',
            Rule::unique('risk_types')->where(function ($query) {
                return $query->where('name', $this->name)
                    ->where('id','!=', $this->model_id);
            })],
            'status' => 'required',
            'risk_category_id' => 'required',
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'name.unique' => ' النوع مسجل مسبقاً !',
        'status.required' => 'الحالة  مطلوبة !',
        'risk_category_id.required' => 'إختر التصنيف !',
    ];

    /*-------------------------------------------------------------------STORE----------*/
    public function store()
    {
        //dump(1);
        $validatedata = $this->validate();
        //dd($validatedata['risk_category_id']);

        //$validatedata['risk_category_id'] = $this->risk_category_id;
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
        $validatedata['user_id'] = $this->user_id;
        $validatedata['office_id'] = $this->office_id;
        //dd($validatedata['risk_category_id']);
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
        $this->risk_category_id = $model->risk_category_id;
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
        return view('livewire.manage-risk-type');
    }
    public function mount()
    {
        $this->status = 'نشط';
    }
}
