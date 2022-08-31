<form>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="tx-17">مسمى المخالفة</label>
        <input type="text" required class="form-control w-12" id="exampleFormControlInput1"
            placeholder="ادخل مسمى المخالفه" wire:model="name">
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
    <button type="submit" wire:click.prevent="store()" class="btn btn-success btn-sm">حفظ</button>
</form>
