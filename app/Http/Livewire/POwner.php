<?php

namespace App\Http\Livewire;

use App\Models\PenaltyOwner;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class POwner extends LivewireDatatable
{
    public function builder()
    {
        $model = PenaltyOwner::where('office_id', Auth::user()->office_id)->orderByDesc('created_at')->get();

    }

    public function columns()
    {
        return [
    		Column::name('name')
            ->label('الإسم')
            ->contentAlignCenter()
            ->headerAlignCenter()
            ->width(250)
            ->exportCallback(function ($value) {
                return (string) $value;
            }),

            Column::name('type_of_id_id')
            ->label('نوع الهوية')
            ->contentAlignRight()
            ->width(300),

    		Column::name('id_no')
            ->label('رقم الهويه')
            ->contentAlignRight()
            ->width(300),
            //->editable(),

            /*Column::callback(['manfisto_id'], function ($manfisto_id) {

                return Manfisto::find($manfisto_id)->transporter->name;
            })
            ->label('المنفستو')
            ->contentAlignRight()
            ->width(300),*/

            /*Column::delete('id')*/
    	];
    }
}
