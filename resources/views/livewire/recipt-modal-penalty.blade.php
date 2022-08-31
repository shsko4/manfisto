<div>
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title">تفاصيل المخالفة</div>
            @if ($errors->any())

                <div id="err_div">
                    <div class="alert alert-danger row-sm w-auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li wire:model='errDiv'>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <form wire:submit.prevent='recipt' autocomplete="off">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col">
                        <label for="penaltyowner_name" style="font-size: 14px">الإسم</label>
                        <input type="text" class="form-control" id="penaltyowner_name" name="penaltyowner_name"
                            required readonly value="{{ old('penaltyowner_name', session('tpenaltyowner_name')) }}"
                            wire:model.debounce.500ms='penaltyowner_name'>
                    </div>
                    <div class="col">

                        <input type="hidden" class="form-control" id="penalty_id" name="penalty_id"
                            wire:model.debounce.500ms='penalty_id'>


                        <label for="penaltytype_name" style="font-size: 14px">نوع المخالفة</label>
                        <input type="text" class="form-control" id="penaltytype_name" name="penaltytype_name"
                            value="{{ old('penaltytype_name', session('tpenaltytype_name')) }}" readonly required wire:model.debounce.500ms='penaltytype_name'>

                    </div>
                </div>


                <div class="row">

                    <div class="form-group col-md-3">
                        <label for="vat" style="font-size: 14px">قمية مضافة</label>
                        <input type="text" class="form-control" id="vat" name="vat" placeholder="17%"
                            readonly value="{{ old('vat') }}" wire:model.debounce.500ms='vat'>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="penalty_amount" style="font-size: 14px">غرامة مالية</label>
                        <input type="text" class="form-control" id="penalty_amount" name="penalty_amount" placeholder="1%"
                            readonly value="{{ old('penalty_amount') }}" wire:model.debounce.500ms='penalty_amount'>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="total" style="font-size: 14px">المجموع</label>
                        <input type="" class="form-control" id="total" name="total"
                            placeholder="المجموع" readonly value="{{ old('total') }}"
                            wire:model.debounce.500ms='total'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipt_no" style="font-size: 14px">رقم الإيصال</label>
                        <input type="number" class="form-control" id="recipt_no" name="recipt_no"
                              value="{{ old('recipt_no') }}" required
                            wire:model.debounce.500ms='recipt_no'>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-control text-center font-italic font-weight-bolder">{{ $totalinArabic }}</label>
                    </div>
                </div>

                <div style="position: relative;">
                    <button class="btn btn-primary" type="submit" id="add-btn" style="visibility: {{ $btn_style }}">حفظ</button>
                    <button class="btn btn-secondary"  id="clear-btn" style="visibility: {{ $btn_style }}"
                    wire:click="resetInputFields">تفريغ الحقول</button>
                </div>

            </form>

        </div>

    </div>
</div>
