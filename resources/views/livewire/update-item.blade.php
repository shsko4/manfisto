<form wire:submit.prevent="update()">
    <div class="row">
        <!--------------------------------------------------------------------SELECT2-------------------->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0" >
            <label for="city-dropdown">الوجهه</label>{{ $category_id }}
            <select name="city-dropdown" id="city-dropdown" class="form-control select2" wire:model='category_id' required>
                <option label="إخر تصنيف المنتج">
                </option>
                @foreach (App\Models\Category::orderBy('name')->get() as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $category_id ? 'selected' : '' }}>
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
            <label for="exampleFormControlInput1" class="tx-17"> إسم التصنيف</label>
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
            <input type="hidden" wire:model="model_id">
            <button type="submit" class="btn btn-dark btn-sm">تعديل</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
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
