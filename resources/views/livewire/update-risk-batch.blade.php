<form wire:submit.prevent="update()">
    <div class="row">
        <div class="col-span-12 ml-5">
            <label for="exampleFormControlInput1" class="tx-17">تايخ البداية</label>
            <input class="form-control" placeholder="MM/DD/YYYY" type="date"
                wire:model="start_date">
            <div>
                @error('start_date')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class="col-span-12 ml-5">
            <label for="exampleFormControlInput1" class="tx-17">تايخ النهاية</label>
            <input class="form-control" placeholder="MM/DD/YYYY" type="date"
                wire:model="end_date">
            <div>
                @error('end_date')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class="col-span-5">
            <label for="select-beast" class="tx-17">الحالة</label>
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
            <input type="hidden" wire:model="model_id">
            <button type="submit" class="btn btn-dark btn-sm">تعديل</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
        </div>
    </div>


</form>
