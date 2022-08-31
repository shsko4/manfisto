<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PenaltyType;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PenaltyTypes extends Component
{
    public $penaltytypes, $office_id, $name, $penaltytype_id;
    public $errDiv = '';
    public $updateMode = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('penalty_types')->where(function ($query) {
                    return $query->where('name', $this->name)
                        ->where('office_id', $this->office_id);
                })

            ],
            'office_id' => 'required',
        ];
    }


    protected $messages = [
        'name.unique' => 'المخالفة موجوده مسبقاَ!!',
        'name.required' => 'أدخل اسم المخالفة',
        'office_id.required' => 'ادخل المكتب',
    ];
    public function render()
    {
        $this->penaltytypes = PenaltyType::where('office_id', Auth::user()->office_id)->get();
        $this->office_id = Auth::user()->office_id;
        return view('livewire.penalty-types');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->reset();
        $this->resetErrorBag();
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
        $validatedDate = $this->validate();

        PenaltyType::create($validatedDate);
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
    public function edit($id)
    {
        $penaltytype = PenaltyType::findOrFail($id);
        $this->penaltytype_id = $id;
        $this->name = $penaltytype->name;

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
        $validatedDate = $this->validate();

        $penaltytype = PenaltyType::find($this->penaltytype_id);
        $penaltytype->update([
            'name' => $this->name,
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
        PenaltyType::find($this->penaltytype_id)->delete();

        $this->dispatchBrowserEvent('swal-pen-del-modal-hide');

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
        $this->penaltytype_id = $id;
        $this->dispatchBrowserEvent('swal-pen-del-modal');
    }
}
