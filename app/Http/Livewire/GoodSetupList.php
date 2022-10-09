<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GoodList;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GoodSetupList extends LivewireDatatable
{
    public function builder()
    {
        $model = GoodList::query()
        ->leftJoin('items', 'items.id', 'good_lists.item_id')
        ->leftJoin('units', 'units.id', 'good_lists.unit_id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::name('items.name')
                ->label('المنتج/البضاعة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('units.name')
                ->label('الوحده')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('good_lists.vat')
                ->label('قيمة الترحيل')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('good_lists.bpt')
                ->label('أ.ع')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(150)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('good_lists.final_tax')
                ->label('ضريبة نهائية')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('good_lists.prod_tax')
                ->label('إنتاج زراعي')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $goodlist = GoodList::find($id);

                return "<button wire:click='theEdit($id)'
                                class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                            <a href='#' class='modal-effect btn btn-sm btn-danger'
                                wire:click='theDelete($id)'
                                data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";
            })
                ->label('العمليات')
                ->contentAlignCenter()
                ->width(200),
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
