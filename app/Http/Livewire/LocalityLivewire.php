<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;
use App\Models\Locality;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LocalityLivewire extends LivewireDatatable
{
    public function builder()
    {
        $model = Locality::orderByDesc('state_id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::callback(['state_id'], function ($state_id) {

                return State::find($state_id)->name;

            })
                ->label('الولاية')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(400)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
    		Column::name('name')
            ->label('المحلية')
            ->contentAlignCenter()
            ->headerAlignCenter()
            ->width(250)
            ->exportCallback(function ($value) {
                return (string) $value;
            }),
            Column::callback(['id'], function ($id) {

                $Locality = Locality::find($id);

                //if (Gate::check('delete', $City)) {


                    return "<button wire:click='theEdit($id)'
                            class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                        <a href='#' class='modal-effect btn btn-sm btn-danger'
                            wire:click='theDelete($id)'
                            data-locality-id='{{ $id }}'><i class='las la-trash'></i></a>";

            })
                ->label('العمليات')
                ->contentAlignRight()
                ->width(200),
    	];
    }

    public function theEdit($id)
    {
        //dd($id);
        $this->emit('editLocality', $id);
    }

    public function theDelete($id)
    {
        //dd($id);
        $this->emit('confirmLocalityDel', $id);
        //dd('after');
    }
}
