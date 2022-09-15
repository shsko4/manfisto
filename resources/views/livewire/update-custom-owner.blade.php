<form>
    <div class="row">
        <!-------------->
        <div class="col">

            <label for="car_no">رقم العربة</label>
            <input type="text" required class="form-control" placeholder="" wire:model="car_no" id='car_no' name='car_no'>

            @error('car_no')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
        <div class="col">


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
        <input type="hidden" wire:model="cutomowner_id">
        <button wire:click.prevent="update()" class="btn btn-dark btn-sm">تعديل</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
    </div>
</div>

</form>
