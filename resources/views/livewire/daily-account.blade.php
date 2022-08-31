<div>
    <div class="row row-sm">
        <div class="col-xl-12 m-2" style="width: 1000px">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">الإيصاللات اليوميه</h4>
                        <button class="btn btn-sm btn-success" wire:click="$emit('dailyAccountRefresh')">تحديث</button>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">الإيصالات التي تم إستخراجها اليوم <a href=""></a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">رقم الإيصال</th>
                                    <th class="wd-15p border-bottom-0">الرقم التعريفي/الوطني</th>
                                    <th class="wd-20p border-bottom-0">الإسم</th>
                                    <th class="wd-15p border-bottom-0">القيمة</th>
                                    <th class="wd-10p border-bottom-0">العمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recipts as $recipt)
                                    <tr>
                                        <td>{{ $recipt->recipt_no }}</td>
                                        <td>
                                            @if ($recipt->manfisto_id)
                                                {{ $recipt->manfisto->transporter->tin }}
                                            @else
                                                {{ $recipt->penalty_id }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($recipt->manfisto_id)
                                                {{ $recipt->manfisto->transporter->name }}
                                            @else
                                                {{ $recipt->penalty_id }}
                                            @endif
                                        </td>
                                        <td>{{ $recipt->total }}</td>
                                        <td>
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                data-model_id="{{ $recipt->id }}" data-toggle="modal" href="#"
                                                title="حذف" data-btn_type='add'><i class="las la-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
