<div>
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title">تفاصيل المنفستو</div>
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
                        <label for="transporter_name" style="font-size: 14px">الترحيلات</label>
                        <input type="text" class="form-control" id="transporter_name" name="transporter_name"
                            required readonly value="{{ old('transporter_name', session('tname')) }}"
                            wire:model.debounce.500ms='transporter_name'>
                    </div>
                    <div class="col">

                        <input type="hidden" class="form-control" id="manfisto_id" name="manfisto_id"
                            wire:model.debounce.500ms='manfisto_id'>


                        <label for="man_no" style="font-size: 14px">رقم المنفستو</label>
                        <input type="text" class="form-control" id="man_no" name="man_no"
                            value="{{ old('man_no', session('tman_no')) }}" readonly required wire:model.debounce.500ms='man_no'>

                    </div>
                </div>



                <div class="row">
                    <div class="col">
                        <label for="dest" style="font-size: 14px">الوجهه</label>
                        <input type="text" class="form-control" id="dest" name="dest" required
                            value="{{ old('dest') }}" readonly wire:model.debounce.500ms='dest'>
                    </div>

                    <div class="col">
                        <label for="car_no" style="font-size: 14px">رقم العربة</label>
                        <input type="text" class="form-control" id="car_no" name="car_no" required
                            value="{{ old('car_no') }}" readonly wire:model.debounce.500ms='car_no'>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-3">
                        <label for="vat" style="font-size: 14px">قمية مضافة</label>
                        <input type="text" class="form-control" id="vat" name="vat" placeholder="17%"
                            readonly value="{{ old('vat') }}" wire:model.debounce.500ms='vat'>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="bpt" style="font-size: 14px">أ.ع 1%</label>
                        <input type="text" class="form-control" id="bpt" name="bpt" placeholder="1%"
                            readonly value="{{ old('bpt') }}" wire:model.debounce.500ms='bpt'>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="bpt2" style="font-size: 14px">أ.ع 1%</label>
                        <input type="text" class="form-control" id="bpt2" name="bpt2" placeholder="1%"
                            readonly value="{{ old('bpt2') }}" wire:model.debounce.500ms='bpt2'>
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
                    wire:click="clearVlaues">تفريغ الحقول</button>
                </div>

            </form>

        </div>

    </div>
</div>
