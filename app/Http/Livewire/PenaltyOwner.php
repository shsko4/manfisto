<?php

namespace App\Http\Livewire;
use Livewire\Component;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\PenaltyOwner as PenaltyOwnerModel;

class PenaltyOwner extends Component
{
    public $penaltyowners, $office_id, $name, $penaltyowner_id,$type_of_id_id,$id_no,$address,$phone;
    public $errDiv = '';
    public $updateMode = false;
    public $divId = 'example1';

    public $listeners = ['editPO','confirmPenDel'];

    protected function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('penalty_owners')->where(function ($query) {
                    return $query->where('name', $this->name)
                        ->where('id_no', $this->id_no)
                        ->where('type_of_id_id', $this->type_of_id_id)
                        ->where('office_id', $this->office_id);
                        //->where('id','!=',$this->penaltyowner_id);
                })

            ],
            'office_id' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'type_of_id_id' => 'required',
            'id_no' => 'required',
        ];
    }


    protected $messages = [
        'name.unique' => 'الإسم موجوده مسبقاَ!!',
        'name.required' => 'أدخل اسم صاحب المخالفة',
        'office_id.required' => 'ادخل المكتب',
        'id_no.required' => 'ادخل رقم الهويه',
        'type_of_id_id.required' => 'ادخل نوع الهويه',
        'address.required' => 'ادخل العنوان',
        'phone.required' => 'ادخل رقم الهاتف',
    ];

    public function render()
    {
        $this->penaltyowners = PenaltyOwnerModel::where('office_id', Auth::user()->office_id)->get();
        $this->office_id = Auth::user()->office_id;
        return view('livewire.penalty-owner');
    }

    private function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->emit('refreshLivewireDatatable');
        /*$this->name = '';
        $this->errDiv = '';*/
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        //dd($this->name);
        $validatedDate = $this->validate();

        PenaltyOwnerModel::create($validatedDate);
        //dd($this->id_no);
        //SweetAlerts
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function editPO($id)
    {
        //dd($id);
        $penaltyowner = PenaltyOwnerModel::findOrFail($id);
        $this->penaltyowner_id = $id;
        $this->name = $penaltyowner->name;
        $this->address = $penaltyowner->address;
        $this->phone = $penaltyowner->phone;
        $this->type_of_id_id = $penaltyowner->type_of_id_id;
        $this->id_no = $penaltyowner->id_no;

        $this->updateMode = true;
        $this->errDiv = 'ssss';
        $this->resetErrorBag();
        //$this->reset();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => [
                'required',
                Rule::unique('penalty_owners')->where(function ($query) {
                    return $query->where('name', $this->name)
                        ->where('id_no', $this->id_no)
                        ->where('type_of_id_id', $this->type_of_id_id)
                        ->where('office_id', $this->office_id)
                        ->where('id','!=',$this->penaltyowner_id);
                })

            ],
            'office_id' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'type_of_id_id' => 'required',
            'id_no' => 'required',
        ]);

        $penaltyowner = PenaltyOwnerModel::find($this->penaltyowner_id);
        $penaltyowner->update([
            'name' => $this->name,
            'type_of_id_id' => $this->type_of_id_id,
            'id_no' => $this->id_no,
            'address' => $this->address,
            'phone' => $this->phone,
        ]);

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

        //session()->flash('message', 'تم تعديل السجل بنجاح');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete()
    {
        PenaltyOwnerModel::find($this->penaltyowner_id)->delete();

        $this->dispatchBrowserEvent('swal-owner-del-modal-hide');

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

    public function confirmPenDel($id)
    {
        //dd($id);
        $this->penaltyowner_id = $id;
        $this->dispatchBrowserEvent('swal-owner-del-modal');
    }
}
