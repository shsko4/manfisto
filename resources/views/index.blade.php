@extends('layouts.master')
@section('css')
@section('title')
الرئيسية
@endsection
    <!--  Owl-carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{ URL::asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
    @vite('resources/css/app.css')
    @livewireStyles
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مرحبا بك {{ auth()->user()->name }}</h2>
                <p class="mg-b-0">نظام المنفستو والمخالفات الخاص بالنوافذ</p>
            </div>
        </div>
        <div class="main-dashboard-header-right">
            <!--<div>
                               <label class="tx-13">Customer Ratings</label>
                               <div class="main-star">
                                <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
                               </div>
                              </div>-->
            @if (auth()->user()->hasRole('owner'))
                <div class="text-center">
                    <label class="tx-13">تحصيل المنفستو الشهري</label>
                    <h5>{{ \App\Models\Account::where('office_id', auth()->user()->office->id)->whereNotNull('manfisto_id')->whereRaw('MONTH(created_at) = ?', [date('m')])->sum('total') }}
                    </h5>
                </div>
                <div class="text-center">
                    <label class="tx-13">تحصيل المخالفات الشهري</label>
                    <h5>{{ \App\Models\Account::where('office_id', auth()->user()->office->id)->whereNotNull('penalty_id')->whereRaw('MONTH(created_at) = ?', [date('m')])->sum('total') }}
                    </h5>
                </div>
            @endif

        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    @can('تقارير الحسابات')
        <livewire:livewire-datatables searchable="recipt_no,model, created_at" exportable hideable="inline" />
    @else
        @if (auth()->user()->hasRole('مفتش'))
            <div class="row">
                <div class="col">عدد المنفستوهات المدخلة بواسطة المستخدم <span
                        class="font-extrabold text-2xl">{{ \App\Models\Manfisto::where('user_id', auth()->user()->id)->count() }}</span>
                </div>
                <div class="col">عدد المخالفات المدخلة بواسطة المستخدم <span
                        class="font-extrabold text-2xl">{{ \App\Models\Penalty::where('user_id', auth()->user()->id)->count() }}</span>
                </div>
                <div class="col"></div>
            </div>
        @elseif (auth()->user()->hasRole('جمارك'))
        جمارك
        @endif
    @endcan



    </div><!-- main-content -->
    </div><!-- container -->
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
@endsection
