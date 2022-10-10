<?php

namespace App\Http\Livewire;

use App\Models\StockRecipt;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class StockOwnerList extends  LivewireDatatable
{
    public function builder()
    {
        $model = StockRecipt::query()
        ->leftJoin('tracks', 'tracks.id', 'stock_recipts.track_id')
        ->leftJoin('loads', 'loads.id', 'stock_recipts.load_id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::name('tracks.name')
                ->label('المسار')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('loads.name')
                ->label('الحمولة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('stock_recipts.borker_name')
                ->label('المخلص')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('stock_recipts.driver_name')
                ->label('السائق')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('stock_recipts.car_no')
                ->label('العربة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $manfistoList = StockRecipt::find($id);

                return "<button wire:click='theEdit($id)'
                                class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                            <a href='#' class='modal-effect btn btn-sm btn-danger'
                                wire:click='theDelete($id)'
                                data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";
            })
                ->label('العمليات')
                ->contentAlignCenter()
                ->width(100),
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
