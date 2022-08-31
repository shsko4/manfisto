@extends('layouts.master')
@section('css')
    <!--  Owl-carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{ URL::asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
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
        <div class="row">
            <div class="col">عدد المنفستوهات المدخلة بواسطة المستخدم <span
                    class="font-extrabold text-2xl">{{ \App\Models\Manfisto::where('user_id', auth()->user()->id)->count() }}</span>
            </div>
            <div class="col">عدد المخالفات المدخلة بواسطة المستخدم <span
                    class="font-extrabold text-2xl">{{ \App\Models\Penalty::where('user_id', auth()->user()->id)->count() }}</span>
            </div>
            <div class="col"></div>
        </div>
    @endcan

    </div><!-- main-content -->
    </div><!-- container -->
    @livewireScripts
@endsection
@section('js')
    <!--Internal  Chart.bundle js
            <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>-->
    <!-- Moment js
            <script src="{{ URL::asset('assets/plugins/raphael/raphael.min.js') }}"></script>-->
    <!--Internal  Flot js
            <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
            <script src="{{ URL::asset('assets/js/dashboard.sampledata.js') }}"></script>
            <script src="{{ URL::asset('assets/js/chart.flot.sampledata.js') }}"></script>-->
    <!--Internal Apexchart js
            <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>-->
    <!-- Internal Map
            <script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
            <script src="{{ URL::asset('assets/js/modal-popup.js') }}"></script>-->
    <!--Internal  index js
            <script src="{{ URL::asset('assets/js/index.js') }}"></script>
            <script src="{{ URL::asset('assets/js/jquery.vmap.sampledata.js') }}"></script>-->
@endsection
