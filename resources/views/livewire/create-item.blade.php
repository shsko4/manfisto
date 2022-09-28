<form wire:submit.prevent="store()">
    <div class="row">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="city-dropdown">الوجهه</label>
            <select name="city-dropdown" id="city-dropdown" class="form-control select2" wire:model='category_id' required>
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
            <label for="exampleFormControlInput1" class="tx-17"> إسم المنتج/البضاعه</label>
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $('#city-dropdown').select2();

            $('#city-dropdown').on('change', function(e) {
                var data = $('#city-dropdown').select2("val");
                @this.set('category_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#city-dropdown').on('change', function(e) {
                    var data = $('#city-dropdown').select2("val");
                    @this.set('category_id', data);
                });

            });
        });
    </script>
</form>
