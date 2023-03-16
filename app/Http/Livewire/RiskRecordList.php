<?php

namespace App\Http\Livewire;

use App\Models\RiskRecord as TheModel;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class RiskRecordList extends LivewireDatatable
{
    public function builder()
    {
        $model = TheModel::query()
        ->leftJoin('risk_types', 'risk_types.id', 'risk_records.risk_type_id')
        ->leftJoin('risk_batches', 'risk_batches.id', 'risk_records.risk_batch_id')
        ->leftJoin('risk_degrees', 'risk_degrees.id', 'risk_records.risk_degree_id')
        ->leftJoin('risk_possibilities', 'risk_possibilities.id', 'risk_records.risk_possibility_id')
        ->orderByDesc('risk_records.id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::name('risk_records.description')
                ->label('الوصف')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(300)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('risk_types.name')
                ->label('النوع')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(300)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('risk_degrees.name')
                ->label('الدرجة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(300)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('risk_possibilities.name')
                ->label('إمكانية الحدوث')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(300)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $unit = TheModel::find($id);

                return "<button wire:click='theEdit($id)'
                                class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                            <a href='#' class='modal-effect btn btn-sm btn-danger'
                                wire:click='theDelete($id)'
                                data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";
            })
                ->label('العمليات')
                ->contentAlignCenter()
                ->width(300),
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
