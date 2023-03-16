<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\RiskBatch as TheModel;

class ManageRiskBatch extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model,$start_date, $end_date,$status, $model_id,$user_id,$office_id;
    public $updateMode = false;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'status' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'start_date.required' => ' ادخل تاريخ البداية !',
        'end_date.required' => ' ادخل تاريخ النهاية !',
        'end_date.after_or_equal' => '  تاريخ نهاية السجل يجب ان يكون بعد تاريخ البداية!',
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
        $this->start_date = $model->start_date;
        $this->end_date = $model->end_date;
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

        return view('livewire.manage-risk-batch');
    }
    public function mount()
    {
        $this->status = 'نشط';
    }
}

