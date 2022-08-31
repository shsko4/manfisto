<form method="POST">
    <div class="row">

        <div class="col">

            <!-------------->
            <label for="name">الإسم <span class="tx-danger">*</span></label>
            <input type="text" required class="form-control" placeholder="" wire:model="penaltyowner_name"
                id='penaltyowner_name' name='penaltyowner_name' readonly>

            @error('penaltyowner_name')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
        <div class="col">
            <label for="penalty_type_id">نوع المخالفة <span class="tx-danger">*</span></label>

            <select class="form-control  nice-select  custom-select" required="" wire:model="penalty_type_id"
                id='penalty_type_id' name='penalty_type_id'>
                <option selected>--اختر--</option>
                @foreach (\App\Models\PenaltyType::where('office_id', auth()->user()->office_id)->get() as $penaltytype)
                    <option value={{ $penaltytype->id }}
                        {{ old('penalty_type_id') == $penaltytype->id ? 'selected' : '' }}>
                        {{ $penaltytype->name }}
                    </option>
                @endforeach
            </select>

            @error('penalty_type_id')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="col">

            <!-------------->
            <label for="location">الموقع</label>
            <input type="text" required class="form-control" placeholder="" wire:model="location"
                id='location' name='location'>

            @error('location')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="col-md-2">

            <!-------------->
            <label for="car_no">رقم العربة</label>
            <input type="text" required class="form-control" placeholder="" wire:model="car_no"
                id='car_no' name='car_no'>

            @error('car_no')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-3">
            <!-------------->
            <label for="vat">قيمة مضافة</label>
            <input type="number" required class="form-control" placeholder="0" wire:model="vat" id='vat'
                name='vat' value="0">

            @error('vat')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col-md-3">
            <!-------------->
            <label for="penalty_amount">غرامة مالية</label>
            <input type="number" class="form-control" placeholder="0" wire:model="penalty_amount"
                id='penalty_amount' name='penalty_amount' value="0">

            @error('penalty_amount')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col-md-3">
            <!-------------->
            <label for="stamp">دمغة</label>
            <input type="number" class="form-control" placeholder="0" wire:model="stamp" id='stamp'
                name='stamp' value="0">

            @error('stamp')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col-md-3">
            <label for="total">المجموع</label>
            <input type="number" class="form-control" readonly placeholder="" wire:model="total" id='total'
                name='total'>

            @error('total')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
    </div>
    <div class="row mt-3">


    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="note">ملاحظات</label>
            <textarea class="form-control" placeholder="" wire:model="note" id='note' name='note' rows="5"
                cols="5"></textarea>

            @error('note')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <button type="submit" wire:click.prevent="store()" class="btn btn-success btn-icons">حفظ</button>
            <button type="button" wire:click.prevent="resetInputFields()"
                class="btn btn-secondary btn-icons">إلغاء</button>
        </div>

    </div>

</form>
