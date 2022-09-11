@extends('layouts.master')
@section('css')

@section('title')
    المُرحِلون
@stop

<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
<!-- Internal Select2 css -->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@vite('resources/css/app.css')
@livewireStyles
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المرحلون</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
             المُرحِلون</span>
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
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="col-sm-1 col-md-2">
                    @can('اضافة مرحل')
                    <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">اضافة
                        مُرحِل</a>
                    @endcan


                </div>
            </div>
            <div class="mt-12" style="height: 400px; overflow: scroll">
                <livewire:transporter-livewire  searchable="name" hideable="inline"/>
            </div>

        </div>
    </div>
    <!--/div-->

    <!-- Modal effects -->
    <div class="modal" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف مرحل</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="" method="post" id="del-form">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="trans_id" id="trans_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <!-- اضافة مرحل -->
    <div class="modal" id="modaldemo3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <form action="{{ route('transporter.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" id="add_form">
                    @csrf
                    <div class="modal-header">
                        <h6 class="modal-title" id="b-title">إضافة مُرحِل</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>


                    </div>
                    @if ($errors->any())
                        <div id="err_div">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    @endif
                    <div class="modal-body">

                        <div class="row m-3">
                            <div class="col">
                                <label for="tin" class="control-label">الرقم التعريفي</label>
                                <input type="text" class="form-control" id="tin" name="tin"
                                    value="{{ old('tin') }}" title="يرجى إدخالر الرقم التعريفي" required>
                            </div>
                            <div class="col">
                                <label for="name" class="control-label">اسم الترحيلات</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" title="يرجى إدخال إسم الترحيلات" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="office_id" class="control-label">مكتب أرباح أعمال</label>
                                <select name="office_id" id="office_id" class="form-control select2" required>
                                        <option label="إختر المكتب">
                                        </option>
                                        @foreach (App\Models\Office::orderBy('name')->get() as $office)
                                            <option value="{{ $office->id }}"
                                                {{ $office->id ==  old('office_id') ? 'selected' : '' }}>
                                                {{ $office->name }}
                                            </option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col">
                                <label for="email" class="control-label">البريد الإلكتروني</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="col">
                                <label for="phone" class="control-label">الهاتف</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ old('phone') }}">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" style="display: none"
                            id="edit-btn">تعديل</button>
                        <button class="btn btn-primary" type="submit" id="add-btn">حفظ</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button"
                            id="close_btn">إغلاق</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--نهاية اضافة مرحل -->
</div>


<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@livewireScripts
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
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

<!-- Internal Select2.min js -->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>


<script src="{{ URL::asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
<!--Internal  Datepicker js -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
<script src="{{ asset('vendor/pharaonic/pharaonic.select2.min.js') }}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
<!-- Ionicons js -->
<script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
<!--Internal  pickerjs js -->
<script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

<script>
    $('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var trans_id = button.data('trans_id')
        var modal = $(this)
        modal.find('.modal-body #trans_id').val(trans_id);
        var url_route = '{{ route('transporter.destroy', ':transporter_id') }}';
        url_route = url_route.replace(':transporter_id', trans_id);
        document.getElementById("del-form").action = url_route;

    })
</script>


@if ($errors->any())
    <script>
        $(window).on('load', function() {
            $('#modaldemo3').modal('show');
        });
    </script>
@endif

<script>
    const btn = document.getElementById('close_btn');

    btn.addEventListener('click', function handleClick(event) {
        // 👇️ if you are submitting a form
        //event.preventDefault();
        const form = document.getElementById('add_form');
        form.reset();
        document.getElementById('err_div').innerHTML = "";
    });
</script>

@endsection
