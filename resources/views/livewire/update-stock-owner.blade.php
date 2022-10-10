<form wire:submit.prevent="update()">
    <div class="row text-center">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="track_id" class="tx-17">المسار<span class="tx-danger">*</span></label>
            <select name="track_id" id="track_id" class="form-control select2" wire:model='track_id' required>
                <option label="اختر المسار ">
                </option>
                @foreach (App\Models\Track::orderBy('name')->get() as $track)
                    <option value="{{ $track->id }}" {{ $track_id == $track->id ? 'selected': ''}}>
                        {{ $track->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('track_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="load_id" class="tx-17">الحموله<span class="tx-danger">*</span></label>
            <select name="load_id" id="load_id" class="form-control select2" wire:model='load_id' required>
                <option label="إختر الحمولة">
                </option>
                @foreach (App\Models\Load::orderBy('name')->get() as $load)
                    <option value="{{ $load->id }}" {{ $load_id == $load->id ? 'selected': ''}}>
                        {{ $load->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('load_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
        <!-------------->
        <div class="col-md-3">

            <label for="boker_name">إسم المخلص</label>

            <input type="text" required class="form-control" placeholder="0" wire:model="boker_name"
                id='boker_name' name='boker_name' value="0">

            @error('boker_name')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
    </div>
    <div class="row mt-2 text-center">
        <div class="col-md-3">

            <label for="driver_name">إسم السائق</label>

            <input type="text" required class="form-control" placeholder="0" wire:model="driver_name"
                id='driver_name' name='driver_name' required>

            @error('driver_name')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
        <div class="col-md-3">

            <label for="car_no">رقم العربة</label>

            <input type="text" required class="form-control" placeholder="0" wire:model="car_no"
                id='car_no' name='car_no' required>

            @error('car_no')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <!-------------->

    <div class="row mt-3">
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <input type="hidden" wire:model="model_id">
            <button type="submit" class="btn btn-dark btn-sm">تعديل</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
        </div>
    </div>
</form>
