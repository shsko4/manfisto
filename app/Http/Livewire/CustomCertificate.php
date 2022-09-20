<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Custom;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use App\Models\CustomCertificate as CustmCerificatModel;
use App\Models\CustomCertificate as CustomCertificateModel;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomCertificate extends LivewireDatatable
{
    public $custom_id;

    public function builder()
    {
        $model = CustmCerificatModel::where('custom_id', $this->custom_id)
            ->whereDate('created_at', Carbon::today())->orderBy('serial');

        return $model;
    }

    public function columns()
    {
        return [
            Column::name('serial')
                ->label('متسلسل')
                ->contentAlignRight()
                ->width(80),
            Column::name('name')
                ->label('الإسم')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(400)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            Column::name('cert_no')
                ->label('رقم الشهاده')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            NumberColumn::name('cert_recipt_no')
                ->label('الإيصال الجمركي')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->format()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            NumberColumn::name('nolon')
                ->label('القيمة')
                ->contentAlignRight()
                ->headerAlignCenter()
                ->format()
                ->width(100)
                ->exportCallback(function ($value) {
                    return (string) $value;
                }),
            NumberColumn::name('stamp')
                ->label('دمغة')
                ->contentAlignRight()
                ->headerAlignCenter()
                //->format()
                ->width(100)
                ->enableSummary()
                ->exportCallback(function ($value) {
                    return number_format($value, 2, ".", ",");
                }),
            NumberColumn::name('bpt')
                ->label('ارباع أعمال')
                ->contentAlignRight()
                ->headerAlignCenter()
                //->format()
                ->width(100)
                ->enableSummary()
                ->exportCallback(function ($value) {
                    return number_format($value, 2, ".", ",");
                }),
            NumberColumn::name('vat')
                ->label('قيمة مضافة')
                ->contentAlignRight()
                ->headerAlignCenter()
                //->format(0)
                ->width(100)
                ->enableSummary()
                ->exportCallback(function ($value) {
                    return number_format($value, 2, ".", ",");
                }),
            NumberColumn::name('total')
                ->label('الجملة')
                ->contentAlignCenter()
                ->headerAlignCenter()
                ->width(250)
                ->sortable()
                ->enableSummary()
                ->exportCallback(function ($value) {
                    return number_format($value, 2, ".", ",");
                }),
             Column::callback(['id'], function ($id) {
                $customcert = CustomCertificateModel::find($id);
                $customcertOwner = Custom::find($customcert->custom_id);

                $del = '';

                if (Gate::check('delete', $customcertOwner)) {
                    $del = "<a href='#' class='modal-effect btn btn-sm btn-danger'
                    wire:click='theDelete($id)'
                    data-penaltyowner='{{ $id }}' title='حذف'><i class='las la-trash'></i></a>";
                }
                return $del;
            })
                ->label('حذف')
                ->contentAlignRight()
                ->excludeFromExport()
                ->width(100),
            /*Column::delete('id')*/
        ];
    }

    public function theDelete($id)
    {
        $this->emit('confirmCertDel', $id);
    }


}
