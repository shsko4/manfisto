<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\TypeOfId;
use App\Models\PenaltyOwner;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\LabelColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PenaltyOwnerList extends LivewireDatatable
{
    public $editpenalty = false;

    public function builder()
    {
        //$model = PenaltyOwner::where('office_id', Auth::user()->office->id)->orderByDesc('created_at');
        $model = PenaltyOwner::orderByDesc('created_at');
        /* ->where('accounts.user_id', Auth::user()->id)
        ->whereDate('accounts.created_at', Carbon::today())
        ->orderByDesc('accounts.created_at');*/

        if (session()->has('editpenalty')) {
            $this->editpenalty = true;
        }

        return $model;
    }

    public function columns()
    {
        return [
            Column::callback(['name', 'id'], function ($name, $id) {

                //return TypeOfId::find($id)->name;
                if (session()->has('editpenalty')) {
                    return $name;
                }

                return "<a href='#' wire:click='setOwner($id)'>$name</a>";
            })
                ->label('الإسم')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(400)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),

            /*Column::name('name')
            ->label('الإسم')
            ->contentAlignRight()
            ->headerAlignCenter()
            ->width(400)
            ->exportCallback(function ($value) {
                return (string) $value;
            }),*/

            Column::callback(['type_of_id_id'], function ($type_of_id_id) {

                return TypeOfId::find($type_of_id_id)->name;
            })
                ->label('نوع الهوية')
                ->contentAlignRight()
                ->width(200),

            Column::name('id_no')
                ->label('رقم الهويه')
                ->contentAlignRight()
                ->width(200),
            //->editable(),

            Column::callback(['id'], function ($id) {

                $penaltyowner = PenaltyOwner::find($id);

                if (Gate::check('delete', $penaltyowner)) {


                    return "<button wire:click='theEdit($id)'
                            class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                        <a href='#' class='modal-effect btn btn-sm btn-danger'
                            wire:click='theDelete($id)'
                            data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";
                } else {


                    return "<button wire:click='theEdit($id)'
                            class='btn btn-sm btn-info'><i class='las la-pen'></i></button>";
                }
            })
                ->label('العمليات')
                ->contentAlignRight()
                ->width(200),
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
