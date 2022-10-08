<?php

namespace App\Http\Livewire;

use App\Models\Track;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TrackListLivewire extends LivewireDatatable
{
    public function builder()
    {
        $model = Track::query()
        ->leftJoin('cities as ci1', 'ci1.id', 'tracks.from_city_id')
        ->leftJoin('cities as ci2', 'ci2.id', 'tracks.to_city_id');

        return $model;
    }

    public function columns()
    {
        return [

            Column::name('tracks.name')
                ->label('اسم المسار')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(200)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('ci1.name')
                ->label('من')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('ci2.name')
                ->label('الي')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $track = Track::find($id);

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
