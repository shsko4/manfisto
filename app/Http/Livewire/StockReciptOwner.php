<?php

namespace App\Http\Livewire;

use App\Models\ManfistoList;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\StockRecipt as TheModel;

class StockReciptOwner extends Component
{
    /*-------------------------------------------------------------------VARIABLES----------*/
    public $model, $name, $model_id, $user_id, $office_id, $track_id, $load_id,$man_no, $broker_name, $driver_name, $car_no;
    public $updateMode = false;
    public $manfisto_total = 0;
    public $shownolon = 'hidden';
    // public $model_owner = false;
    public $ownerobj;

    /*-------------------------------------------------------------------LISTNERS----------*/
    public $listeners = ['editModel', 'confirmModelDel'];

    /*-------------------------------------------------------------------RULES----------*/
    protected function rules()
    {
        return [
            'track_id' => 'nullable',
            'load_id' => 'required_with:track_id',
            'broker_name' => 'nullable',
            'man_no' => 'nullable',
            'driver_name' => 'required',
            'car_no' => 'required',
        ];
    }

    /*-------------------------------------------------------------------MESSAGES----------*/
    protected $messages = [

        'load_id.required_with' => 'يجب تحديد الحمولة في حال تحديد مسار!',
        'driver_name.required' => 'أدخل إسم السائق',
        'car_no.required' => 'أدخل رقم العربه',
    ];

    /*-------------------------------------------------------------------STORE----------*/
    public function store()
    {
        //dump('f1');
        $validatedata = $this->validate();
        //d('f2');
        $this->user_id = Auth::user()->id;
        $this->office_id = Auth::user()->office_id;
        /*$validatedata['item_id'] = 1;
         $validatedata['unit_id'] = $this->unit_id;
         $validatedata['vat'] = $this->vat;
         $validatedata['bpt'] = $this->bpt;
         $validatedata['final_tax'] = $this->final_tax;
         $validatedata['prod_tax'] = $this->prod_tax;
         //$validatedata['total'] = $this->total;

         $validatedata['year'] = $this->year;
         //dd('f');*/
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
        $this->track_id = $model->track_id;
        $this->load_id = $model->load_id;
        $this->driver_name = $model->driver_name;
        $this->car_no = $model->car_no;
        $this->man_no = $model->man_no;
        $this->broker_name = $model->broker_name;

        $this->updateMode = true;
        $this->dispatchBrowserEvent('DOMContentLoaded');
        $this->resetErrorBag();
    }

    /*-------------------------------------------------------------------UPDATE----------*/
    public function update()
    {

        $validatedata = $this->validate();
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
    public function render()
    {
        if ($this->track_id != null && $this->load_id != null) {

            $this->shownolon = 'visiable';
            $sockobj = ManfistoList::where('track_id', $this->track_id)->where('load_id', $this->load_id)->first();
            if($sockobj){
                $this->manfisto_total = round($sockobj->total);

            }else{
                $this->manfisto_total = 0;
                $this->shownolon = 'hidden';
            }

        }else{
            $this->shownolon = 'hidden';
            $this->manfisto_total = 0;
        }
        return view('livewire.stock-recipt-owner');
    }
}
