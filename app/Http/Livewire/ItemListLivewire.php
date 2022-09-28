<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ItemListLivewire extends LivewireDatatable
{
    public function builder()
    {
        $model = Item::query()
        ->leftJoin('categories', 'categories.id', 'items.category_id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::name('items.name')
                ->label('اسم البضاعه')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('categories.name')
                ->label('نوع الصنف')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $unit = Item::find($id);

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
