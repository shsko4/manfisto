@extends('layouts.master2')

@section('title')
    تسجيل الدخول - مورا نافذه امدرمان
@endsection


@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{ URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}"
        rel="stylesheet">
@endsection
@section('content')
    <div class="">
        <div class="justify-center">

            <!-- The image half -->
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white  " style="height: 500px; width: 600px; right: 5%; margin-top: 50px">

                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto mt-4">
                                <div class="card-sigin">
                                    <div class="mb-3 d-flex justify-content-center"> <a href="{{ url('/' . ($page = 'Home')) }}"><img
                                                src="{{ URL::asset('assets/img/brand/headertax3.png') }}"
                                                class="sign-favicon ht-40" alt="logo"></a>
                                    </div>

                                    <div class="card-sigin">
                                        <div class="main-signup-header ">
                                            <h2 style="text-align: center" class="mb-5">مرحبا بك في نظام النوافذ</h2>
                                            <h5 class="font-weight-semibold mb-4"> تسجيل الدخول</h5>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label>اسم الدخول</label>
                                                    <input id="username" type="text"
                                                        class="form-control @error('username') is-invalid @enderror"
                                                        name="username" value="{{ old('username') }}" required
                                                        autocomplete="username" autofocus>
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>كلمة المرور</label>

                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="form-group row">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="remember" id="remember"
                                                                    {{ old('remember') ? 'checked' : '' }}>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('تذكرني') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main-primary btn-block">
                                                    {{ __('تسجيل الدخول') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->

            </div><!-- End -->

        </div>
    </div>
@endsection
@section('js')
@endsection
