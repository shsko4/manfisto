<div>
    <!-- row opened -->
    <div class="row row-sm" >
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header" style="font-size: 20px">1- إختيار الترحيلات</div>
                <div class="card-body">
                    <div class="table-responsive hoverable-table" style="height: auto; width: auto">
                        <table class="table text-md-nowrap dataTable  collapsed" id="example-delete" data-page-length='10'
                            style=" text-align: center;">
                            <thead>
                                <tr>

                                    <th class="wd-10p border-bottom-0 " style="background-color: rgb(240, 233, 233)">الرقم التعريفي</th>
                                    <th class="wd-15p border-bottom-0 " style="background-color: rgb(240, 233, 233)">اسم المرحل</th>
                                    <!--<th class="wd-20p border-bottom-0 " style="background-color: rgb(240, 233, 233)">البريد الالكتروني</th>-->
                                    <!--<th class="wd-15p border-bottom-0 " style="background-color: rgb(240, 233, 233)">رقم الهاتف</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transporters as $transporter)
                                    <tr wire:click="$emit('trSelected','{{ $transporter->id }}')" style="cursor: pointer;">

                                        <td class="font-weight-bolder">{{ $transporter->tin }}</td>
                                        <td class="font-weight-bolder">{{ $transporter->name }}</td>
                                        <!--<td>{{ $transporter->email }}</td>-->
                                        <!--<td>{{ $transporter->phone }}</td>-->

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>



<!-- /row -->
</div>
