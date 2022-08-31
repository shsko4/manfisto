<form>
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
        <input type="hidden" wire:model="penaltyowner_id">
        <button wire:click.prevent="update()" class="btn btn-dark btn-sm">تعديل</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
    </div>
</div>

</form>
