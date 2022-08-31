<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />
    @include('layouts.head')

</head>

<body class="main-body app sidebar-mini">
    <!-- Loader-->
    <div id="global-loader">
        <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!--Loader -->
    @include('layouts.main-sidebar')
    <!-- main-content -->
    <div class="main-content app-content">
        @include('layouts.main-header')
        <!-- container -->
        <div class="container-fluid" style="width: auto;padding-right: 0px ;">
            @yield('page-header')
            @yield('content')
            @include('sweetalert::alert')
            @include('layouts.sidebar')
            @include('layouts.models')
            <!-- include('layouts.footer')-->
            @include('layouts.footer-scripts')

</body>

<script>
    $('#mandelet').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget)
        var model_id = button.data('model_id')
        var modal = $(this)
        modal.find('.modal-body #model_id').val(model_id);
        var url_route = '{{ route('manfisto.destroy', ':model_id') }}';
        url_route = url_route.replace(':model_id', model_id);
        document.getElementById("del-man-form").action = url_route;

    })

    $('#pendelet').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget)
        var model_id = button.data('model_id')
        var modal = $(this)
        modal.find('.modal-body #model_id').val(model_id);
        var url_route = '{{ route('penalty.destroy', ':model_id') }}';
        url_route = url_route.replace(':model_id', model_id);
        document.getElementById("del-pen-form").action = url_route;

    })
</script>
<script>
    $('#chatmodel').on('show.bs.modal', function(event) {

        var modal = $(this)
        var button = $(event.relatedTarget)
        var transporter_name = button.data('transporter_name')

        var man_no = button.data('man_no')
        var car_no = button.data('car_no')
        var dest = button.data('dest')
        var nolon = button.data('nolon')
        var size = button.data('size')

        var vat = button.data('vat')
        var bpt = button.data('bpt')
        var bpt2 = button.data('bpt2')
        var total = button.data('total')

        var username = button.data('username')



        modal.find('.card-body #transporter_name').val(transporter_name);
        modal.find('.card-body #man_no').val(man_no);
        modal.find('.card-body #dest').val(dest);
        modal.find('.card-body #car_no').val(car_no);
        modal.find('.card-body #nolon').val(nolon);
        modal.find('.card-body #vat').val(vat);
        modal.find('.card-body #bpt').val(bpt);
        modal.find('.card-body #bpt2').val(bpt2);
        modal.find('.card-body #total').val(total);
        modal.find('.card-body #username').val(username);
    })

    $('#penaltychatmodel').on('show.bs.modal', function(event) {

        var modal = $(this)
        var button = $(event.relatedTarget)
        var owner_name = button.data('owner_name')

        var penaltytype = button.data('penaltytype')
        var location = button.data('location')
        var vat = button.data('vat')
        var stamp = button.data('stamp')
        var penalty_amount = button.data('penalty_amount')
        var total = button.data('total')
        var recipt_no = button.data('recipt_no')

        var username = button.data('username')



        modal.find('.card-body #owner_name').val(owner_name);
        modal.find('.card-body #penaltytype_name').val(penaltytype);
        modal.find('.card-body #location').val(location);
        modal.find('.card-body #vat').val(vat);
        modal.find('.card-body #stamp').val(stamp);
        modal.find('.card-body #penalty_amount').val(penalty_amount);
        modal.find('.card-body #total').val(total);
        modal.find('.card-footer #recipt_no').val(recipt_no);
        modal.find('.card-body #username').val(username);
    })
</script>

</html>
