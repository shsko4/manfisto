<?php

namespace App\Http\Livewire;

use App\Models\RiskType;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class RiskTypeList extends LivewireDatatable
{
    public function builder()
    {
        $model = RiskType::query()
        ->leftJoin('risk_categories', 'risk_categories.id', 'risk_types.risk_category_id')
        ->orderByDesc('risk_types.id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::name('risk_types.name')
                ->label('النوع')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('risk_types.status')
                ->label('الحاله')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('risk_categories.name')
                ->label('التصنيف')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $unit = RiskType::find($id);

                return "<button wire:click='theEdit($id)'
                                class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                            <a href='#' class='modal-effect btn btn-sm btn-danger'
                                wire:click='theDelete($id)'
                                data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";
            })
                ->label('العمليات')
                ->contentAlignCenter()
                ->width(150),
        ];
    }

    public function theEdit($id)
    {
        //dd($id);
        $this->emit('editModel', $id);
    }

    public function theDelete($id)
    {
        $this->emit('confirmModelDel', $id);
    }
}
