<form method="POST">
    <div class="alert alert-success row-sm w-auto text-center" wire:loading wire:target="setOwnerEvent">جاري التحميل.....</div>
    <div class="row">

        <div class="col">

            <!-------------->
            <label for="name">الإسم</label>
            <input type="text" required class="form-control" placeholder="" wire:model="name" id='name' name='name'>

            @error('name')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
        <div class="col">
            <label for="id_type">نوع الهوية</label>

            <select class="form-control  nice-select  custom-select"
            required="" wire:model="type_of_id_id" id='type_of_id_id' name='type_of_id_id'>
            <option  selected>--اختر--</option>
            @foreach (\App\Models\TypeOfId::all() as $typeofid)
                <option value={{ $typeofid->id }} {{ old('type_of_id_id') == $typeofid->id ? 'selected': ''}}>{{ $typeofid->name }}</option>
            @endforeach
        </select>

            @error('type_of_id_id')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="col">
            <!-------------->
            <label for="id_no">رقم الهوية</label>
            <input type="text" required class="form-control" placeholder="" wire:model="id_no" id='id_no' name='id_no'>

            @error('id_no')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

    </div>

<div class="row mt-3">
    <div class="col-md-4">
        <!-------------->
        <label for="phone">رقم الهاتف</label>
        <input type="text" required class="form-control" placeholder="" wire:model="phone" id='phone' name='phone'>

        @error('phone')
            <div>
                <span class="text-danger mt-2">{{ $message }}</span>
            </div>
        @enderror
    </div>
    <div class="col-md-6">
        <!-------------->
        <label for="address">العنوان</label>
        <input type="text" required class="form-control" placeholder="" wire:model="address" id='address' name='address'>

        @error('address')
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
