@extends('layouts.master')
@section('css')
@section('title')
الحسابات
@stop
@livewireStyles
    @livewireScripts
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <style>
        div[name="manDiv"]:hover {
            cursor: pointer;
        }
    </style>
@vite('resources/css/app.css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between" style="width: auto;height: 25px;">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحسابات</h4>
                @if (session()->has('thedate'))
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ معملات سابقة لم يتم سدادها</span>
                @else
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ معاملات اليوم</span>
                @endif
            </div>
        </div>
        <div class="main-dashboard-header-right ">
            <div class="text-center">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">العمليات</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                        data-x-placement="bottom-end">
                        <a class="dropdown-item" href="#" onclick="showMan()">المنفستو</a>
                        <a class="dropdown-item" href="#" onclick="showPen()">المخالفات</a>
                        <a class="dropdown-item" href="#" onclick="showCustom()">شهادات جمركية</a>
                        <a class="dropdown-item" href="#" onclick="showCash()">إيصالات اليوم</a>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <label >مجموع النقدية اليومي</label>
                <h5><livewire:accountant-cash /></h5>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div id="cash-manfisto" class="row" style="position: absolute; visibility: visiable;"><!--manfisto-->
            <div class="col w-auto">

                <livewire:account-manfisto/>
            </div>
            <div class="col">
                <livewire:recipt-modal />
            </div>
        </div>

        <div class="row" id="cash-penalty" style="position: absolute;visibility: hidden;"><!--penalty-->

            <div class="col w-auto">
                <livewire:account-penalty/>
            </div>
            <div class="col">
                 <livewire:recipt-modal-penalty />
            </div>

        </div>

        <div class="row" id="cash-custom" style="position: absolute;visibility: hidden;"><!--Custom-->
            <div class="col w-auto">
                <livewire:account-custom/>
            </div>
            <div class="col">
                 <livewire:recipt-custom-modal />
            </div>

        </div>

        <div class="row" id="cash-cash" style="position: absolute;visibility: hidden;width: 1000px;right: 300px;"><!--cash-->


                <livewire:livewire-datatables searchable="recipt_no,model, created_at" exportable/>

        </div>

    </div>


    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <script src="{{ URL::asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });

        function showMan() {
           // alert('manfisto');
            var manfisto = document.getElementById("cash-manfisto");
            var penalty = document.getElementById("cash-penalty");
            var custom = document.getElementById("cash-custom");
            var cash = document.getElementById("cash-cash");

            manfisto.style.visibility = "visible";
            penalty.style.visibility = "hidden";
            custom.style.visibility = "hidden";
            cash.style.visibility = "hidden";

        }

        function showPen() {
           // alert('pen');
            var manfisto = document.getElementById("cash-manfisto");
            var penalty = document.getElementById("cash-penalty");
            var custom = document.getElementById("cash-custom");
            var cash = document.getElementById("cash-cash");

            manfisto.style.visibility = "hidden";
            penalty.style.visibility = "visible";
            custom.style.visibility = "hidden";
            cash.style.visibility = "hidden";
        }
        function showCustom() {
           // alert('pen');
            var manfisto = document.getElementById("cash-manfisto");
            var penalty = document.getElementById("cash-penalty");
            var custom = document.getElementById("cash-custom");
            var cash = document.getElementById("cash-cash");

            manfisto.style.visibility = "hidden";
            penalty.style.visibility = "hidden";
            custom.style.visibility = "visible";
            cash.style.visibility = "hidden";
        }

        function showCash() {
           // alert('cash');
            var manfisto = document.getElementById("cash-manfisto");
            var penalty = document.getElementById("cash-penalty");
            var custom = document.getElementById("cash-custom");
            var cash = document.getElementById("cash-cash");

            manfisto.style.visibility = "hidden";
            penalty.style.visibility = "hidden";
            custom.style.visibility = "hidden";
            cash.style.visibility = "visible";
        }
    </script>
@endsection
