<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #031b4e;
            text-align: right;
            direction: rtl;
            background-color: white;
        }

        .table {
            color: #364261;
            border: 1px solid
        }

        .table thead th,
        .table thead td {
            color: #37374e;
            font-weight: 700;
            font-size: 11px;
            letter-spacing: .5px;
            text-transform: uppercase;
            border-bottom-width: 1px;
            border-top-width: 2px;
            border: 1px solid;
        }

        .table tbody tr {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .table tbody tr th {
            font-weight: 500;
        }

        .table th,
        .table td {
            line-height: 1.462;
            border: 1px solid;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-top-width: 1px;

            background-color: rgba(255, 255, 255, 0.5);
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 2px;
        }
    </style>
</head>

<body>
    <div style="margin-bottom:50px ">
        <img src="data:image/png;base64, {!! base64_encode(file_get_contents(public_path('assets/img/wadi-half-logo.png'))) !!}">

    </div>
    <div style="margin-top: 3px">التاريخ : {{ date_format(Carbon\Carbon::now(), 'Y-d-m') }}
        <div style="padding-right: 500px; margin-bottom: 3px">رقم الإيصال : {{ $recipt_no }}</div>
    </div>

    <div class='table-responsive'>

        <table class="table table-bordered" style="left: 10px; width:800px">
            <thead>
                <tr>
                    <th class="border-bottom-0">#</th>
                    <th class="border-bottom-0">الإسم</th>
                    <th class="border-bottom-0">رقم الشهاده</th>
                    <th class="border-bottom-0">الإيصال الجمركي</th>
                    <th class="border-bottom-0">القيمة</th>
                    <th class="border-bottom-0">دمغة</th>
                    <th class="border-bottom-0">أرباح أعمال</th>
                    <th class="border-bottom-0">قيمة مضافة</th>
                    <th class="border-bottom-0">الجملة</th>


                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @if (isset($custom_certs))
                    @foreach ($custom_certs as $custom_cert)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $custom_cert->name }} </td>
                            <td>{{ $custom_cert->cert_no }}</td>
                            <td>{{ $custom_cert->cert_recipt_no }}</td>
                            <td>{{ number_format($custom_cert->nolon) }}</td>
                            <td>{{ number_format($custom_cert->stamp) }}</td>
                            <td>{{ number_format($custom_cert->bpt) }}</td>
                            <td>{{ $custom_cert->vat }}</td>
                            <td>{{ $custom_cert->total }}</td>
                            <!--<td>
                    </td>-->
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="8">الجملة</td>

                        <td>{{ $total_tax_amount }}</td>
                        <!--<td>
                </td>-->
                    </tr>
            </tbody>
        </table>
        <div style="display: flex">
            <div style="margin-top:20px; margin-left: 30px; "><b style="margin-left:10px ">إسم السائق:</b><span>{{ $driver_name }}</span>
            </div>
            <div style="margin-top:10px "><b style="margin-left:10px ">رقم العربة :</b><span>{{ $car_no }}</span>
            </div>
        </div>

        <div style="padding-right: 500px;">
            <div style="margin-top:20px "><b style="margin-left:10px "> توقيع المفتش:</b>
            </div>
            <div style="margin-top:5px "><b style="margin-left:10px "> {{ auth()->user()->name }}</b>
            </div>
            <div style="margin-top:10px "><b style="margin-left:10px ">ختم المكتب  :</b>
            </div>
        </div>

        @endif
    </div>
</body>

</html>
