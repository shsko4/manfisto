<?php

namespace App\Http\Livewire;

use App\Models\Ld;
use App\Models\User;
use App\Models\Account;
use Livewire\Component;
use App\Models\Manfisto;
use App\Models\Transporter;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Traits\CanPinRecords;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class LivewireDatatables extends LivewireDatatable
{
    //public $model = Ld::class;
    //public $model ;

    //public $complex = true;

    //use CanPinRecords;

    public function builder()
    {
        $user = User::find(auth()->user()->id);
        if($user->hasRole('accountant')){

            $model = Account::with('transporters.manfisto')->where('accounts.office_id', Auth::user()->office->id)
        ->where('accounts.user_id', Auth::user()->id)
        ->whereDate('accounts.created_at', Carbon::today())
        ->orderByDesc('accounts.created_at');

        }else{

            $model = Account::with('transporters.manfisto')->where('accounts.office_id', Auth::user()->office->id)
        //->where('accounts.user_id', Auth::user()->id)
        //->whereDate('accounts.created_at', Carbon::today())
        ->orderByDesc('accounts.created_at');
        }


        //$model->name = 'www';

        return $model;
    }

    function columns()
    {

    	return [
    		Column::name('recipt_no')
            ->label('الإيصال')
            ->contentAlignCenter()
            ->headerAlignCenter()
            ->width(250)
            ->exportCallback(function ($value) {
                return (string) $value;
            }),

            Column::name('model')
            ->label('نوع السجل')
            ->contentAlignRight()
            ->width(300),

    		Column::name('name')
            ->label('الاسم')
            ->contentAlignRight()
            ->width(300),
            //->editable(),

    		NumberColumn::name('total')
            ->label('القيمة')
            ->contentAlignCenter()
            ->headerAlignCenter()
            ->width(250)
            ->sortable()
            ->enableSummary()
            ->exportCallback(function ($value) {
                return number_format($value, 2, ".", ",");
            }),

    		//Column::name('phone')->label('الهاتف'),
    		DateColumn::name('created_at')
            ->label('تاريج الإنشاء')
            ->contentAlignCenter()
            ->headerAlignCenter()
            ->width(300)
            ->format('Y-m-d'),

            /*Column::callback(['manfisto_id'], function ($manfisto_id) {

                return Manfisto::find($manfisto_id)->transporter->name;
            })
            ->label('المنفستو')
            ->contentAlignRight()
            ->width(300),*/

            /*Column::delete('id')*/
    	];
    }

    /*public function rowClasses($row, $loop)
    {
        return 'divide-x divide-gray-300 text-sm text-gray-900 bg-gray-400' . ($this->rowIsSelected($row) ? 'bg-yellow-100' : 'bg-gray-50');
    }

    public function cellClasses($row, $column)
    {
        return 'text-sm bg-green-500' . ($this->rowIsSelected($row) ? ' text-gray-900' :' text-gray-900');
    }*/

}
