@extends('layouts.master')
@section('css')

@section('title')
  إضافة منفستو
@endsection

<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">


<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
<style>
input[data-readonly] {
    pointer-events: none;
  }
  </style>

@vite('resources/css/app.css')
@livewireStyles
@endsection

@section('page-header')
<!-- breadcrumb
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">إضافة منفستو جديد</h4>
        </div>
    </div>
</div>
 breadcrumb -->
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
<div class="row mt-2 left-5" style="width: 100%;">
    <div class="col">
        <livewire:transporter-search />
    </div>
    <div class="col">
        <livewire:add-manfisto />
    </div>

</div>



@endsection

<!-- main-content closed -->
@livewireScripts

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
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

<script src="{{ URL::asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

<script src="{{ asset('vendor/pharaonic/pharaonic.select2.min.js') }}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<script>
    window.addEventListener('swal', function(e) {
        Swal.fire(e.detail);
    });
</script>

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

            document.getElementById("vat").value = Math.round(vat);
            document.getElementById("bpt").value = Math.round(bpt);
            document.getElementById("bpt2").value = Math.round(bpt2);
            document.getElementById("total").value = Math.round(total);
        }

    }

    function transSet(id, name, next_man) {
        //alert(next_man);
        document.getElementById("transporter_id").value = id;
        document.getElementById("transporter_name").value = name;
        document.getElementById("man_no").value = next_man;

    }


</script>
<script></script>

@endsection
