<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll" style="width: auto">
    <div class="main-sidebar-header active" style="width: auto">
        <a class="desktop-logo logo-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/headertax3.png') }}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/logo-white.png') }}" class="main-logo dark-theme"
                alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/headertax3favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/favicon-white.png') }}" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <!--<div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ URL::asset('assets/img/faces/6.jpg') }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>-->
                <div class="user-info text-green-600">
                    <a href="{{ route('index_password') }}" title="نعديل كلمة المرور">
                        <h6 class="font-weight-semibold mt-3 mb-0  ">{{ Auth::user()->name }}</h6>
                    </a>
                    <h6 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->office->name }}</h6>
                    <span class="mb-0 text-muted">{{ auth()->user()->main_role }}</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">برنامج النافذه</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('/' . ($page = 'index')) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">الرئيسية</span></a>
            </li>
            @can('العمليات')

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">العمليات</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('اضافة منفستو')
                            <li><a class="slide-item" href="{{ route('manfisto.create') }}">المنفستو</a></li>
                        @endcan

                        @can('المخالفات')
                            <li><a class="slide-item" href="{{ route('penalty.index') }}">المخالفات</a></li>
                        @endcan

                        @can('جمارك')
                            <li><a class="slide-item" href="{{ route('custom.index') }}"> شهادات جمركية</a></li>
                        @endcan

                        @can('بورصه')
                            <li><a class="slide-item" href="{{ route('stockrecipt.index') }}">مسير بورصه</a></li>
                        @endcan


                    </ul>
                </li>
            @endcan
            @can('محاسب')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                        </svg><span class="side-menu__label">الحسابات</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('محاسب')
                            <li><a class="slide-item" href="{{ route('account.index') }}">معاملات حديثة</a></li>

                            <li><a class="slide-item" href="{{ route('account.old') }}">معاملات سابقة</a></li>
                        @endcan




                    </ul>
                </li>
            @endcan
            @can('التقارير')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3" />
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                        </svg><span class="side-menu__label">التقارير</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('تقارير المنفستو')
                            <li><a class="slide-item" href="{{ route('manfistoreport') }}">تقارير المنفستو</a></li>
                        @endcan
                        @can('تقارير المخالفات')
                            <li><a class="slide-item" href="{{ route('penaltyreport') }}">تقارير المخالفات</a></li>
                        @endcan
                        @can('تقارير جمارك')
                            <li><a class="slide-item" href="{{ route('custom_report.index') }}">تقارير الجمارك</a></li>
                        @endcan
                        @can('تقارير جمارك')
                            <li><a class="slide-item" href="{{ route('cert_report.index') }}">تفاصيل الشهادات</a></li>
                        @endcan

                        @can('تقارير الحسابات')
                            <li><a class="slide-item" href="#">تقارير الحسابات</a></li>
                        @endcan


                    </ul>
                </li>
            @endcan


            @can('المستخدمين')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3" />
                            <path
                                d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z" />
                        </svg><span class="side-menu__label">المستخدمين</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">

                        @can('قائمة المستخدمين')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'users')) }}"> المستخدمين</a></li>
                        @endcan
                        @can('صلاحيات المستخدمين')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'roles')) }}">الصلاحيات </a></li>
                        @endcan


                    </ul>
                </li>
            @endcan

            @can('الاعدادات')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3" />
                            <path
                                d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z" />
                        </svg><span class="side-menu__label">الاعدادات</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('تصنيفات المخاطر')
                            <li><a class="slide-item" href="{{ route('risk-category.index') }}">تصنيفات المخاطر</a></li>
                        @endcan

                        @can('انواع المخاطر')
                            <li><a class="slide-item" href="{{ route('risk-type.index') }}">انواع المخاطر</a></li>
                        @endcan

                        @can('حزم المخاطر')
                            <li><a class="slide-item" href="{{ route('risk-batch.index') }}">حزم المخاطر</a></li>
                        @endcan
                        @can('سجل المخاطر')
                            <li><a class="slide-item" href="{{ route('risk-record.index') }}">سجل المخاطر</a></li>
                        @endcan

                        @can('المرحلين')
                            <li><a class="slide-item" href="{{ route('transporter.index') }}">المرحلين</a></li>
                        @endcan


                        @can('نوع مخالفة')
                            <li><a class="slide-item" href="{{ route('penaltytype.index') }}">أنواع المخالفات</a></li>
                        @endcan


                        @can('تسجيل مخالف')
                            <li><a class="slide-item" href="{{ route('penaltyowner.index') }}">مُخالِف</a></li>
                        @endcan

                        @can('المحليات')
                            <li><a class="slide-item" href="{{ route('locality.index') }}">المحليات</a></li>
                        @endcan

                        @can('المدن')
                            <li><a class="slide-item" href="{{ route('city.index') }}">المُدن</a></li>
                        @endcan

                        @can('الوحدات')
                            <li><a class="slide-item" href="{{ route('unit.index') }}">الوحدات</a></li>
                        @endcan

                        @can('تصنيفات')
                            <li><a class="slide-item" href="{{ route('category.index') }}">أصناف البضائع</a></li>
                        @endcan

                        @can('بضائع')
                            <li><a class="slide-item" href="{{ route('item.index') }}"> البضائع</a></li>
                        @endcan

                        @can('مسارات')
                            <li><a class="slide-item" href="{{ route('track.index') }}"> المسارات</a></li>
                        @endcan

                        @can('حموله')
                            <li><a class="slide-item" href="{{ route('load.index') }}"> الحموله</a></li>
                        @endcan

                    </ul>
                </li>
            @endcan
            @can('لوائح')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3" />
                            <path
                                d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z" />
                        </svg><span class="side-menu__label">اللوائح</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">

                        <li><a class="slide-item" href="{{ route('setupmanfisto.index') }}">لائحة المنفستو</a></li>

                        <li><a class="slide-item" href="{{ route('setupgood.index') }}">لائحة البضائع</a></li>

                    </ul>
                </li>
            @endcan
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
