@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
    @vite('resources/css/app.css')
    @livewireStyles
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between" style="height: 15px;">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">أنواع المخالفات</h4>
            </div>
        </div>
        <!--<div class="d-flex my-xl-auto right-content">
                    <div class="pr-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
                    </div>
                    <div class="pr-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
                    </div>
                    <div class="pr-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
                    </div>
                    <div class="mb-3 mb-xl-0">
                        <div class="btn-group dropdown">
                            <button type="button" class="btn btn-primary">14 Aug 2019</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                                data-x-placement="bottom-end">
                                <a class="dropdown-item" href="#">2015</a>
                                <a class="dropdown-item" href="#">2016</a>
                                <a class="dropdown-item" href="#">2017</a>
                                <a class="dropdown-item" href="#">2018</a>
                            </div>
                        </div>
                    </div>
                </div>-->
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <livewire:penalty-types />
                </div>
            </div>
        </div>


    </div>
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
    <script src="{{ URL::asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });

        window.addEventListener('swal-pen-del-modal', event => {
            $('#modaldemo9').modal('show');
        });

        window.addEventListener('swal-pen-del-modal-hide', event => {
            $('#modaldemo9').modal('hide');
        });
    </script>
@endsection
