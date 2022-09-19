@extends('layouts.master')
@section('css')

@section('title')
    تقرير المنفستو
@stop

<!-- Internal Data table css -->
<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المنفستو</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
                المنفستو لليوم</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')

@if (session()->has('success'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{ session('success') }}",
                type: "success"
            })
        }
    </script>
@endif





<!-- row opened -->
<div class="col-xl-12">
    <div class="card mg-b-20">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <div class="col-sm-1 col-md-2 mb-6">
                    @can('اضافة منفستو')
                        <a class="btn ripple btn-info" data-target="#modaldemo3"
                            href="{{ route('manfisto.create') }}">منفستو
                            جديد
                        </a>
                    @endcan


                </div>

            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table key-buttons text-md-nowrap">
                    <thead>
                        <tr style="width: auto; align-content: flex-end">
                            <th class="wd-10p border-bottom-0">#</th>
                            <th class="wd-15p border-bottom-0">اسم الترحيلات</th>
                            <th class="wd-20p border-bottom-0">رقم العربة</th>
                            <th class="wd-15p border-bottom-0">الوجهه</th>
                            <!--<th class="wd-10p border-bottom-0" style="width: auto">الحموله</th>-->
                            <th class="wd-15p border-bottom-0">النولون</th>
                            <!--<th class="wd-15p border-bottom-0" style="width: auto">17%</th>
                            <th class="wd-20p border-bottom-0" style="width: auto">1%</th>-->
                            <th class="wd-10p border-bottom-0">المجموع</th>
                            <th class="wd-10p border-bottom-0">حالة الدفع</th>
                            <th class="wd-15p border-bottom-0">الإيصال</th>
                            <th class="wd-10p border-bottom-0">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($manfistos as $manfisto)
                            <tr style="width: auto">

                                <td>

                                    <a href="#" class="btn btn-sm btn-dark-gradient" data-toggle="modal"
                                        data-target="#chatmodel"
                                        data-transporter_name="{{ $manfisto->transporter->name }}"
                                        data-man_no="{{ $manfisto->man_no }}" data-dest="{{ $manfisto->city->name }}"
                                        data-car_no="{{ $manfisto->car_no }}" data-nolon="{{ $manfisto->nolon }}"
                                        data-bpt2="{{ $manfisto->bpt2 }}" data-size="{{ $manfisto->size }}"
                                        data-vat="{{ $manfisto->vat }}" data-bpt="{{ $manfisto->bpt }}"
                                        data-total="{{ $manfisto->vat + $manfisto->bpt + $manfisto->bpt2 }}"
                                        data-username="{{ $manfisto->user->name }}" data-size="{{ $manfisto->size }}">
                                        {{ $manfisto->man_no }}
                                    </a>
                                </td>
                                <td>{{ $manfisto->transporter->name }}</td>
                                <td>{{ $manfisto->car_no }}</td>
                                <td>{{ $manfisto->city->name }}</td>
                                <!--<td>{{ $manfisto->size }}</td>-->
                                <td>{{ $manfisto->nolon }}</td>
                                <!--<td>{{ $manfisto->vat }}</td>
                                <td>{{ $manfisto->bpt }}</td>-->
                                <td>{{ $manfisto->total }}</td>
                                <td>
                                    @if ($manfisto->status == 2)
                                        <span class="text-success">مدفوع</span>
                                    @else($invoice->value_Status == 2)
                                        <span class="text-danger">غير مدفوع</span>
                                    @endif
                                </td>
                                <td>{{ $manfisto->recipt_no }}</td>


                                <td>
                                    @can('تعديل منفستو')
                                        @can('update', $manfisto)
                                            <a href="{{ route('manfisto.edit', $manfisto->id) }}" class="btn btn-sm btn-info"
                                                title="تعديل" data-effect="effect-scale" data-trans_id="{{ $manfisto->id }}"
                                                data-btn_type='edit' data-tin="{{ $manfisto->tin }}"
                                                data-name="{{ $manfisto->name }}" data-email="{{ $manfisto->email }}"
                                                data-phone="{{ $manfisto->phone }}">
                                                <i class="las la-pen"></i></a>
                                                @else
                                                تم سداد قيمة المنفستو
                                        @endcan
                                    @endcan


                                    @can('حذف منفستو')
                                        @can('delete', $manfisto)
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                data-model_id="{{ $manfisto->id }}" data-trans_name="{{ $manfisto->name }}"
                                                data-toggle="modal" href="#modaldemo8" title="حذف" data-btn_type='add'><i
                                                    class="las la-trash"></i></a>
                                        @endcan
                                    @endcan



                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal effects -->
    <div class="modal" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف منفستو</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="" method="post" id="del-form">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="model_id" id="model_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- /row -->

<!--</div></div>-->
@livewireScripts
@endsection
@section('js')
<!-- Internal Data tables -->

<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>

<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

<script>
    $('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var model_id = button.data('model_id')
        var modal = $(this)
        modal.find('.modal-body #model_id').val(model_id);
        var url_route = '{{ route('manfisto.destroy', ':model_id') }}';
        url_route = url_route.replace(':model_id', model_id);
        document.getElementById("del-form").action = url_route;

    })
</script>
@endsection
