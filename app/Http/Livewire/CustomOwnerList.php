<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Custom;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomOwnerList extends LivewireDatatable
{
    public $edit_model = false;

    public function builder()
    {
        $model = Custom::where('office_id', Auth::user()->office->id)
            ->whereDate('date_of_trip', Carbon::today())->orderByDesc('id');

        return $model;
    }

    public function columns()
    {
        return [
            Column::name('id')
                ->label('#')
                ->contentAlignRight()
                ->width(100),
            Column::name('driver_name')
                ->label('السائق')
                ->contentAlignRight()
                ->headerAlignCenter()
                //->editable()
                ->width(400)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('car_no')
                ->label('رقم العربة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(400)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),

            Column::callback(['id', 'driver_name'], function ($id) {
                $customOwner = Custom::find($id);
                return $customOwner->cert_count;
            })
                ->label('عدد الشهادات')
                ->contentAlignCenter()
                ->width(150),
            NumberColumn::callback(['id', 'created_at'], function ($id) {
                $customOwner = Custom::find($id);
                return number_format($customOwner->total_tax_amount);
            })
                ->label('الجملة')
                ->contentAlignCenter()
                //->format()
                ->width(150),
            Column::name('recipt_no')
                ->label('رقم الإيصال')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(300)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {
                $customOwner = Custom::find($id);
                $delbtn =  "<a href='#' class='modal-effect btn btn-sm btn-danger'
                wire:click='theDelete($id)'
                data-penaltyowner='{{ $id }}' title='حذف'><i class='las la-trash'></i></a>";

                if (!Gate::check('delete', $customOwner)) {
                    $delbtn = '';
                }
                return "<a href='#' wire:click='setOwner($id)' class='btn btn-sm btn-success' title='إضافة وعرض الشهادات'><i class='las la-file-invoice'></i></a>
                <button wire:click='theEdit($id)'
                class='btn btn-sm btn-info' title='تعديل'><i class='las la-pen'></i></button> " . $delbtn;

            })
                ->label('العمليات')
                ->contentAlignCenter()
                ->excludeFromExport()
                ->width(400),
            /*Column::delete('id')*/
        ];
    }

    public function theEdit($id)
    {
        $this->emit('editPO', $id);
    }

    public function theDelete($id)
    {
        //dd($id);
        $this->emit('confirmPenDel', $id);
    }
    public function setOwner($id)
    {
        $this->emit('setOwnerEvent', $id);
    }
}
