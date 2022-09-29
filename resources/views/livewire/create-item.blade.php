<form wire:submit.prevent="store()">
    <div class="row">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="category_id" class="tx-17">نوع السلعه</label>
            <select name="category_id" id="category_id" class="form-control select2" wire:model='category_id' required>
                <option label="إخر تصنيف المنتج">
                </option>
                @foreach (App\Models\Category::orderBy('name')->get() as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <div>
                @error('category_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!--------------------------------------------------------------------SELECT2 END-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <label for="exampleFormControlInput1" class="tx-17"> إسم السلعه/البضاعه</label>
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
