<form wire:submit.prevent="store()">
    <div class="row">
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <label for="exampleFormControlInput1" class="tx-17"> إسم التصنيف</label>
            <input type="text" required class="form-control w-12" id="exampleFormControlInput1" placeholder=""
                wire:model="name">
            <div>
                @error('name')
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
