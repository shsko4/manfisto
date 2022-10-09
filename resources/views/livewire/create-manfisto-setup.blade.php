<form wire:submit.prevent="store()">

    <div class="row text-center">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="track_id" class="tx-17">المسار<span class="tx-danger">*</span></label>
            <select name="track_id" id="track_id" class="form-control select2" wire:model='track_id' required>
                <option label="اختر المسار ">
                </option>
                @foreach (App\Models\Track::orderBy('name')->get() as $track)
                    <option value="{{ $track->id }}">
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
                    <option value="{{ $load->id }}">
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
        <div class="col-span-7 mr-2">
            <label for="nolon" class="tx-17">قيمة الترحيل <span class="tx-danger">*</span></label>
            <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading wire:target="nolon">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <input type="number" required class="form-control" placeholder="" wire:model="nolon"
                id='nolon' name='nolon' required>

            @error('nolon')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
    </div>
    <div class="row mt-2 text-center">
        <!-------------->
        <div class="col-span-7 mr-2">
            <label for="vat" class="tx-17"> قيمة مضافة <span class="tx-danger">*</span></label>
            <input type="number" required class="form-control" placeholder="" wire:model="vat"
                id='vat' name='vat' readonly>

            @error('vat')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
         <!-------------->
         <div class="col-span-7 mr-2">
            <label for="bpt" class="tx-17"> 1% أرباح أعمال آليات <span class="tx-danger">*</span></label>
            <input type="number" required class="form-control" placeholder="" wire:model="bpt"
                id='bpt' name='bpt' readonly>

            @error('bpt')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->

        <!-------------->
        <div class="col-span-7 mr-2">
            <label for="bpt_agent" class="tx-17"> 1% أرباح أعمال من عمولة الوكيل <span class="tx-danger">*</span></label>
            <input type="number" required class="form-control" placeholder="" wire:model="bpt_agent"
                id='bpt_agent' name='bpt_agent' readonly>

            @error('bpt_agent')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->

        <!-------------->
        <div class="col-span-7 mr-2 ">
            <label for="total" class="tx-17 ">الإجمالي <span class="tx-danger">*</span></label>
            <input type="number" required class="form-control" placeholder="" wire:model="total"
                id='total' name='total' readonly>

            @error('total')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
    </div>

    <div class="row mt-3">

        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <button type="submit" class="btn btn-success btn-sm">حفظ</button>
        </div>

    </div>

</form>
