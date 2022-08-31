<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\State;
use Livewire\Component;
use App\Models\Locality;
use Illuminate\Support\Facades\Gate;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class CityLivewire extends LivewireDatatable
{
    public function builder()
    {
        $model = City::orderByDesc('id');

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
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),

            Column::callback(['locality_id'], function ($locality_id) {

                $locality = Locality::withTrashed()->find($locality_id)->name;
                if(Locality::withTrashed()->find($locality_id)->deleted){

                    return "<lable class='text-danger'>".$locality."</lable>";
                }
                return $locality;
            })
                ->label('المحلية')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('name')
                ->label('المدينة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
                Column::callback(['id'], function ($id) {

                    $City = City::find($id);

                    //if (Gate::check('delete', $City)) {


                        return "<button wire:click='theEdit($id)'
                                class='btn btn-sm btn-info'><i class='las la-pen'></i></button>
                            <a href='#' class='modal-effect btn btn-sm btn-danger'
                                wire:click='theDelete($id)'
                                data-penaltyowner='{{ $id }}'><i class='las la-trash'></i></a>";

                })
                    ->label('العمليات')
                    ->contentAlignRight()
                    ->width(200),
        ];
    }

    public function theEdit($id)
    {
        $this->emit('editCity', $id);
    }

    public function theDelete($id)
    {
        $this->emit('confirmCityDel', $id);
    }
}
