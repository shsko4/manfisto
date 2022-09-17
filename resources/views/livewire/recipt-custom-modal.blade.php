<div>
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title">إجمالي الشهادات في العربة</div>
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
                        <label for="driver_name" style="font-size: 14px">إسم السائق</label>
                        <input type="text" class="form-control" id="driver_name" name="driver_name" required readonly
                            value="{{ old('driver_name', session('tname')) }}" wire:model.debounce.500ms='driver_name'>
                    </div>
                    <div class="col">

                        <input type="hidden" class="form-control" id="custom_id" name="custom_id"
                            wire:model.debounce.500ms='custom_id'>


                        <label for="car_no" style="font-size: 14px">رقم العربة</label>
                        <input type="text" class="form-control" id="car_no" name="car_no"
                            value="{{ old('car_no', session('tman_no')) }}" readonly required
                            wire:model.debounce.500ms='car_no'>

                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="stamp" style="font-size: 14px">دمغة</label>
                        <input type="text" class="form-control" id="stamp" name="stamp" placeholder="1%"
                            readonly value="{{ old('stamp') }}" wire:model.debounce.500ms='stamp'>
                    </div>
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


                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="total" style="font-size: 14px">المجموع</label>
                        <input type="" class="form-control" id="total" name="total" placeholder="المجموع"
                            readonly value="{{ old('total') }}" wire:model.debounce.500ms='total'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipt_no" style="font-size: 14px">رقم الإيصال</label>
                        <input type="number" class="form-control" id="recipt_no" name="recipt_no"
                            value="{{ old('recipt_no') }}" required wire:model.debounce.500ms='recipt_no'>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for=""
                            class="form-control text-center font-italic font-weight-bolder">{{ $totalinArabic }}</label>
                    </div>
                </div>

                <div style="position: relative;">
                    <button class="btn btn-primary" type="submit" id="add-btn"
                        style="visibility: {{ $btn_style }}">حفظ</button>
                    <button class="btn btn-secondary" id="clear-btn" style="visibility: {{ $btn_style }}"
                        wire:click="clearVlaues">تفريغ الحقول</button>
                </div>

            </form>

        </div>

    </div>
</div>
