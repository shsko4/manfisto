<form wire:submit.prevent="update()">
    <div class="row text-center">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="item_id" class="tx-17">المنتج/البضاعة<span class="tx-danger">*</span></label>
            <select name="item_id" id="item_id" class="form-control select2" wire:model='item_id' required>
                <option label="اختر البضاعه ">
                </option>
                @foreach (App\Models\Item::orderBy('name')->get() as $item)
                    <option value="{{ $item->id }}" {{ $item_id == $item->id ? 'selected': ''}}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('item_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="item_id" class="tx-17">الوحدة<span class="tx-danger">*</span></label>
            <select name="the_unit" id="the_unit" class="form-control select2" wire:model='unit_id'>
                <option label="اختر الوحده ">
                </option>
                @foreach (App\Models\Unit::orderBy('name')->get() as $the_unit)
                    <option value="{{ $the_unit->id }}" {{ $unit_id == $the_unit->id ? 'selected': ''}}>
                        {{ $the_unit->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('the_unit')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
        <!-------------->
        <div class="col-span-7 mr-2">
            <label for="vat" class="tx-17">قيمة مضافة<span class="tx-danger">*</span></label>
            <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading wire:target="vat">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <input type="number" required class="form-control" placeholder="" wire:model="vat"
                id='vat' name='vat'>

            @error('vat')
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
            <label for="bpt" class="tx-17"> أرباح أعمال  <span class="tx-danger">*</span></label>
            <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading wire:target="bpt">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <input type="number" required class="form-control" placeholder="" wire:model="bpt"
                id='bpt' name='bpt' >

            @error('bpt')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->

        <!-------------->
        <div class="col-span-7 mr-2">
            <label for="final_tax" class="tx-17"> ضريبة نهائية<span class="tx-danger">*</span></label>
            <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading wire:target="final_tax">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <input type="number" required class="form-control" placeholder="" wire:model="final_tax"
                id='final_tax' name='final_tax'>

            @error('final_tax')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
        <!-------------->
        <div class="col-span-7 mr-2">
            <label for="prod_tax" class="tx-17"> إنتاج زراعي<span class="tx-danger">*</span></label>
            <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading wire:target="prod_tax">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <input type="number" required class="form-control" placeholder="" wire:model="prod_tax"
                id='prod_tax' name='prod_tax'>

            @error('prod_tax')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->

        <!-------------->
        <!-- <div class="col-span-7 mr-2 ">
            <label for="total" class="tx-17 ">الإجمالي <span class="tx-danger">*</span></label>
            <input type="number" required class="form-control" placeholder="" wire:model="total"
                id='total' name='total' readonly>

            error('total')
                <div>
                    <span class="text-danger mt-2"> message </span>
                </div>
            enderror
        </div>-->
        <!-------------->
    </div>
    <div class="row mt-3">
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <input type="hidden" wire:model="model_id">
            <button type="submit" class="btn btn-dark btn-sm">تعديل</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
        </div>
    </div>
</form>
