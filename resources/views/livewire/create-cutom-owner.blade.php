<form method="POST">
    <div class="alert alert-success row-sm w-auto text-center" wire:loading wire:target="setOwnerEvent">جاري التحميل.....</div>
    <div class="row">
        <div class="col">
            <!-------------->
            <label for="car_no">رقم العربة</label>
            <input type="text" required class="form-control" placeholder="" wire:model="car_no" id='car_no' name='car_no'>

            @error('car_no')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col">

            <!-------------->
            <label for="driver_name">إسم السائق</label>
            <input type="text" required class="form-control" placeholder="" wire:model="driver_name" id='driver_name' name='driver_name'>

            @error('driver_name')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>


    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" wire:click.prevent="store()" class="btn btn-success btn-sm">حفظ</button>
        </div>

    </div>

</form>
