@extends('layouts.master')
@section('css')

@section('title')
    المُرحِلون-تعديل
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

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المرحلون</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                تعديل</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@if ($errors->any())
<script>
    window.onload = function() {
        notif({
            type: "error",
            msg: "خطأ!",
            position: "center",
            autohide: false,

        })
    }
</script>
@endif
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

<!-- row -->
<!-- Center alignment -->

<div class="align-items-center" style="position: relative; right: 15%;">
    <div class="row row-sm">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 main-content-label">تعديل بيانات المرحلين</div>
                    @if ($errors->any())
                        <div id="err_div">
                            <div class="alert alert-danger row-sm w-auto">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{ route('transporter.update', $transporter->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">الرقم التعريفي</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required id="tin" name="tin"
                                        value="{{ old('tin', $transporter->tin) }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">إسم الترحيلات</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required id="name" name="name"
                                        value="{{ old('name', $transporter->name) }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">رقم الهاتف</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone', $transporter->phone) }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">مكتب أرباع أعمال</label>
                                </div>
                                <!--<div class="col-md-9">
                                    <input type="phone" class="form-control" id="office_id" name="office_id"
                                        value="{{ old('office_id', $transporter->office->name) }}">
                                </div>-->
                                <div class="col-md-9">
                                    <select name="office_id" id="office_id" class="form-control select2" required>
                                        <option label="إختر المكتب">
                                        </option>
                                        @foreach (App\Models\Office::orderBy('name')->get() as $office)
                                            <option value="{{ $office->id }}"
                                                {{ $office->id == $transporter->office_id ? 'selected' : '' }}>
                                                {{ $office->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">البريد الإلكتروني</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email', $transporter->email) }}">
                                </div>
                            </div>
                        </div>

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn ripple btn-info waves-effect waves-light">تعديل</button>
                    <a href="{{ route('transporter.index') }}" class="btn btn-secondary">رجوع</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Center alignment closed-->

<!-- row closed -->
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
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
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


@endsection
