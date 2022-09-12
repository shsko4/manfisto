<?php

namespace App\Http\Livewire;

use App\Models\Office;
use Livewire\Component;
use App\Models\Transporter;
use Illuminate\Support\Facades\Gate;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TransporterLivewire extends LivewireDatatable
{
    public function builder()
    {
        $model = Transporter::query()
            ->leftJoin('offices', 'offices.id', 'transporters.office_id');
        //$model = Transporter::orderByDesc('office_id');

        return $model;
    }

    public function columns()
    {
        return [


            Column::name('tin')
                ->label('الرقم التعريفي')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(250)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('transporters.name')
                ->label('الاسم')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(250)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('offices.name')
                ->label('مكتب أ.ع')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(400)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('phone')
                ->label('الهاتف')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(250)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::callback(['id'], function ($id) {

                $transporter = Transporter::find($id);
                $editUrl = "transporter.edit";
                $editUrl = route($editUrl, $transporter->id);

                $del = '';

                if (Gate::check('delete', $transporter)) {
                    $del = "  <a class='modal-effect btn btn-sm btn-danger' data-effect='effect-scale'
                    data-trans_id= $transporter->id
                    data-toggle='modal'
                    href='#modaldemo8' title='حذف' data-btn_type='add'><i
                    class='las la-trash'></i></a>";
                }

                return  "<a href=$editUrl class='btn btn-sm btn-info' title='تعديل'
                    data-effect='effect-scale'
                    data-trans_id='{{ $transporter->id }}' data-btn_type='edit'
                    data-tin='{{ $transporter->tin }}' data-name='{{ $transporter->name }}'
                    data-email='{{ $transporter->email }}'
                    data-phone='{{ $transporter->phone }}'>
                    <i class='las la-pen'></i></a>".$del;

            })
                ->label('العمليات')
                ->contentAlignRight()
                ->width(200),
        ];
    }
}
