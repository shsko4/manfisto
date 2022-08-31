<form>
    <input type="hidden" wire:model="penaltytype_id">
    <div class="form-group">
        <label for="exampleFormControlInput1" class="tx-17">مسمى المخالفة:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="أدخل مسمى المخالفة" wire:model="name">
        <div>
            <ul>
                <li>
                    @error('name')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </li>

            </ul>

        </div>
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark btn-sm">تعديل</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
</form>
