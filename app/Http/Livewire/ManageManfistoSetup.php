<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ManfistoList as TheModel;

class ManageManfistoSetup extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model, $name, $model_id,$user_id,$office_id,$track_id,$load_id;
    public $nolon = 0,$vat = 0,$bpt = 0,$bpt_agent = 0,$total = 0, $year;
    public $updateMode = false;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'track_id' => 'required',
            'load_id' => 'required',
            'nolon' => 'required',
            'vat' => 'required',
            'bpt' => 'required',
            'bpt_agent' => 'required',
            'total' => 'required',
            'year' => 'required',
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [
        'track_id.required' => 'إختر المسار',
        'load_id.required' => 'إختر الحموله',
        'nolon.required' => 'أدخل قيمة الترحيل',
        'vat.required' => 'أدخل القيمة المضافة',
        'bpt.required' => 'أدخل أرباح أعمال الأليات',
        'bpt_agent.required' => 'أدخل أرباح أعمال من عمولة الوكيل',
        'total.required' => 'أدخل الإجمالي',
        'total.required' => 'أدخل سنة القائمة',
    ];

    /*-------------------------------------------------------------------STORE----------*/
    public function store()
    {
        $validatedata = $this->validate();
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
        $validatedata['user_id'] = $this->user_id;
        $validatedata['office_id'] = $this->office_id;
        $validatedata['year'] = $this->year;
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
        $this->track_id = $model->track_id;
        $this->load_id = $model->load_id;
        $this->nolon = round($model->nolon);
        $this->vat = $model->vat;
        $this->bpt = $model->bpt;
        $this->bpt_agent = $model->bpt_agent;
        $this->total = $model->total;

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
        if (!is_numeric($this->nolon)) {
            $this->nolon = 0;

        }

        if ($this->nolon < 0) {
            $this->nolon = 0;

        }

        $this->vat = round($this->nolon*17/100);
        $this->bpt = round($this->nolon/100);
        $this->bpt_agent = round($this->nolon/100);
        $this->bpt = round($this->nolon*5/100);
        $this->total = round($this->vat + $this->bpt + $this->bpt_agent);
        $this->year = date_format(Carbon::now(), 'Y');
        return view('livewire.manage-manfisto-setup');
    }
}
