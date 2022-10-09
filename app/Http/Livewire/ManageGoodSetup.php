<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\GoodList as TheModel;

class ManageGoodSetup extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model, $name, $model_id,$user_id,$office_id,$item_id  , $vat = 0,$bpt = 0,$final_tax = 0,$prod_tax = 0,$total = 0, $year;
    public $updateMode = false;
    public $unit_id;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'item_id' => 'required',
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'item_id.required' => 'إختر المنتج أوالبضاعة'
       /* 'unit_id.required' => 'إختر الوحدة',
        'year.required' => 'أدخل سنة القائمة'*/
    ];

    /*-------------------------------------------------------------------STORE----------*/
    public function store()
    {
        //dump('f1');
        $validatedata = $this->validate();
        //d('f2');
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
        $validatedata['item_id'] = 1;
        $validatedata['unit_id'] = $this->unit_id;
        $validatedata['vat'] = $this->vat;
        $validatedata['bpt'] = $this->bpt;
        $validatedata['final_tax'] = $this->final_tax;
        $validatedata['prod_tax'] = $this->prod_tax;
        $validatedata['total'] = $this->total;
        $validatedata['user_id'] = $this->user_id;
        $validatedata['office_id'] = $this->office_id;
        $validatedata['year'] = $this->year;
        //dd('f');
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
        $this->item_id = $model->item_id;
        $this->unit_id = $model->unit_id;
        $this->vat = $model->vat;
        $this->bpt = $model->bpt;
        $this->final_tax = $model->final_tax;
        $this->prod_tax = $model->prod_tax;
        $this->total = $model->total;

        $this->updateMode = true;
        $this->dispatchBrowserEvent('DOMContentLoaded');
        $this->resetErrorBag();
    }

    /*-------------------------------------------------------------------UPDATE----------*/
    public function update()
    {

        $validatedata = $this->validate();
        $validatedata['unit_id'] = $this->unit_id;
        $validatedata['vat'] = $this->vat;
        $validatedata['bpt'] = $this->bpt;
        $validatedata['final_tax'] = $this->final_tax;
        $validatedata['prod_tax'] = $this->prod_tax;
        $validatedata['total'] = $this->total;
        $model = TheModel::find($this->model_id);
        $model->update($validatedata);


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
        $this->dispatchBrowserEvent('DOMContentLoaded');
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
        if (!is_numeric($this->vat)) {
            $this->vat = 0;

        }

        if ($this->vat < 0) {
            $this->vat = 0;

        }
        if (!is_numeric($this->bpt)) {
            $this->bpt = 0;

        }

        if ($this->bpt < 0) {
            $this->bpt = 0;

        }

        if (!is_numeric($this->final_tax)) {
            $this->final_tax = 0;

        }

        if ($this->final_tax < 0) {
            $this->final_tax = 0;

        }
        if (!is_numeric($this->prod_tax)) {
            $this->prod_tax = 0;

        }

        if ($this->prod_tax < 0) {
            $this->prod_tax = 0;

        }
        $this->year = date_format(Carbon::now(), 'Y');
        $this->total = round($this->vat + $this->bpt + $this->final_tax + $this->prod_tax);
        return view('livewire.manage-good-setup');
    }
}
