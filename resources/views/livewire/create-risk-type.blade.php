<form wire:submit.prevent="store()">
    <div class="row">
        <div class="col-span-12 ml-5">
            <label for="exampleFormControlInput1" class="tx-17">النوع</label>
            <input type="text" required class="form-control w-12" id="exampleFormControlInput1" placeholder=""
                wire:model="name">
            <div>
                @error('name')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class="col-span-5 ml-5">
            <label for="select-beast" class="tx-17">التصنيف</label>
            <select name="risk_category_id" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="risk_category_id" required>
                <option value="null">
                    --إختر التصنيف--
                </option>
                @foreach (App\Models\RiskCategory::orderBy('name')->get() as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
            </select>

            <div>
                @error('status')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-span-5">
            <label for="select-beast" class="tx-17">حالة نوع المخاطر</label>
            <select name="status" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="status">
                <option value="نشط" selected>نشط</option>
                <option value="غير نشط">غير نشط</option>
            </select>

            <div>
                @error('status')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>


    </div>
    <div class="row mt-3">

        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <button type="submit" class="btn btn-success btn-sm">حفظ</button>
        </div>

    </div>

</form>
