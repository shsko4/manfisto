<form wire:submit.prevent="update()">
    <div class="row">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="from_city_id" class="tx-17">من</label>
            <select name="from_city_id" id="from_city_id" class="form-control select2" wire:model='from_city_id' required>
                <option label="اختر نقطة الإنطلاق">
                </option>
                @foreach (App\Models\City::orderBy('name')->get() as $city)
                <option value="{{ $city->id }}" {{ $city->id == $from_city_id ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('from_city_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="to_city_id" class="tx-17">الي</label>
            <select name="to_city_id" id="to_city_id" class="form-control select2" wire:model='to_city_id' required>
                <option label="إختر الوجهه">
                </option>
                @foreach (App\Models\City::orderBy('name')->get() as $city)
                <option value="{{ $city->id }}" {{ $city->id == $to_city_id ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('to_city_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
    </div>

    <div class="row mt-3">
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <input type="hidden" wire:model="model_id">
            <button type="submit" class="btn btn-dark btn-sm">تعديل</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
        </div>
    </div>
</form>
