<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Custom;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
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
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('car_no')
                ->label('رقم العربة')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {
                $customOwner = Custom::find($id);
                return "<a href='#' wire:click='setOwner($id)' class='btn btn-sm btn-success'><i class='las la-file-invoice'></i></a>
                <button wire:click='theEdit($id)'
                class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                <a href='#' class='modal-effect btn btn-sm btn-danger'
                wire:click='theDelete($id)'
                data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";
            })
                ->label('العمليات')
                ->contentAlignRight()
                ->width(150),
            /*Column::delete('id')*/
        ];
    }

    public function theEdit($id)
    {
        $this->emit('editPO', $id);
    }

    public function theDelete($id)
    {
        $this->emit('confirmPenDel', $id);
    }
    public function setOwner($id)
    {
        $this->emit('setOwnerEvent', $id);
    }
}
