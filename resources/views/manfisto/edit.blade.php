@extends('layouts.master')
@section('css')

@section('title')
    تعديل منفستو
@stop

<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!-- Internal Select2 css -->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المنفستو</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">تعديل
                منفستو</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')
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


<div class="align-items-center" style="position: relative; ">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!--<div class="card-header" style="font-size: 25px"> بيانات المنفستو </div>-->
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
                    <form action="{{ route('manfisto.update', $manfisto) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="transporter_name" style="font-size: 20px">الترحيلات</label>
                                <input type="text" class="form-control" id="transporter_name" name="transporter_name"
                                    placeholder="الترحيلات" required readonly
                                    value="{{ old('transporter_name', $manfisto->transporter->name) }}">

                                <input type="hidden" class="form-control" id="transporter_id" name="transporter_id"
                                    value="{{ old('transporter_id', $manfisto->transporter_id) }}">
                                <input type="hidden" class="form-control" id="user_id" name="user_id"
                                    value="{{ auth()->user()->id }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="man_no" style="font-size: 20px">رقم المنفستو</label>
                                <input type="text" class="form-control" id="man_no" name="man_no"
                                    placeholder="رقم المنفستو" required value="{{ old('man_no', $manfisto->man_no) }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <!--<div class="form-group col-md-2">
                                <label for="dest" style="font-size: 20px">الوجهه</label>
                                <input type="text" class="form-control" id="dest" name="dest"
                                    placeholder="الوجهه" required value="{{ old('dest', $manfisto->dest) }}">
                            </div>-->

                            <div class="form-group col-md-2">
                                <label for="city_id" style="font-size: 20px">الوجهه</label>
                                <select name="city_id" id="city_id" class="form-control select2" required>
                                    <option label="إخر المدينة">
                                    </option>
                                    @foreach (App\Models\State::orderBy('name')->get() as $state)
                                        <optgroup label="{{ $state->name }}">

                                            @foreach ($state->cities as $city)
                                                <option value="{{ $city->id }}"
                                                    {{ $city->id == $manfisto->city_id ? 'selected' : '' }}>
                                                    {{ $city->name }}
                                                </option>
                                            @endforeach
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="car_no" style="font-size: 20px">رقم العربة</label>
                                <input type="text" class="form-control" id="car_no" name="car_no"
                                    placeholder="رقم العربة" required value="{{ old('car_no', $manfisto->car_no) }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="size" style="font-size: 20px">الحمولة</label>
                                <input type="text" class="form-control" id="size" name="size"
                                    placeholder="الحمولة" value="{{ old('size', $manfisto->size) }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="nolon" style="font-size: 20px">النولون</label>
                                <input type="number" class="form-control" id="nolon" name="nolon"
                                    placeholder="النولون" required oninput="myFunction()"
                                    value="{{ old('nolon', $manfisto->nolon) }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="vat" style="font-size: 20px">قمية مضافة</label>
                                <input type="text" class="form-control" id="vat" name="vat"
                                    placeholder="17%" readonly value="{{ old('vat', $manfisto->vat) }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="bpt" style="font-size: 20px">أ.ع 1%</label>
                                <input type="text" class="form-control" id="bpt" name="bpt"
                                    placeholder="1%" readonly value="{{ old('bpt', $manfisto->bpt) }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="bpt2" style="font-size: 20px">أ.ع 1%</label>
                                <input type="text" class="form-control" id="bpt2" name="bpt2"
                                    placeholder="1%" readonly value="{{ old('bpt2', $manfisto->bpt2) }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="total" style="font-size: 20px">المجموع</label>
                                <input type="" class="form-control" id="total" name="total"
                                    placeholder="المجموع" readonly value="{{ old('total', $manfisto->total) }}">
                            </div>
                        </div>

                        <div class="modal-footer">


                        </div>
                        <div style="position: relative; right: 30%;">
                            <button class="btn btn-primary" type="submit" id="add-btn">تعديل</button>
                            <a class="btn ripple btn-secondary" href="{{ route('manfisto.index') }}">رجوع</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

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

<!-- Internal Select2.min js -->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>
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

<!--------------------------------------------------------------inside scripts-------------------------------->

<script>
    function myFunction() {


        var nolon = parseFloat(document.getElementById("nolon").value);

        if (typeof nolon === 'undefined' || !nolon) {



            notif({
                msg: "يرجي ادخال مبلغ النولون بصورة صحيحة",
                type: "error",
                autohide: false
            });

        } else {
            var vat = (nolon * 17) / 100;
            var bpt = (nolon * 1) / 100;
            var bpt2 = (nolon * 1) / 100;
            var total = vat + bpt + bpt2;

            document.getElementById("vat").value = vat;
            document.getElementById("bpt").value = bpt;
            document.getElementById("bpt2").value = bpt2;
            document.getElementById("total").value = total;
        }

    }

    function transSet(id, name, next_man) {
        //alert(next_man);
        document.getElementById("transporter_id").value = id;
        document.getElementById("transporter_name").value = name;
        document.getElementById("man_no").value = next_man;

    }

    document.addEventListener("DOMContentLoaded", () => {
        $('#city_id').select2();
    });
</script>
<script></script>

@endsection
