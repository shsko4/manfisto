<form wire:submit.prevent="update()">
    <div class="row">

        <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
            <label for="exampleFormControlInput1" class="tx-17">الولاية</label>
            <select name="state_id" id="state_id" class="form-control  nice-select  custom-select" wire:model='state_id' required>
                </option>
                @foreach (App\Models\State::orderBy('name')->get() as $state)
                    <option value="{{ $state->id }}" {{ $state_id == $state->id ? 'selected': ''}}>
                        {{ $state->name }}
                    </option>
                @endforeach
            </select>

            <div>
                <ul>
                    <li>
                        @error('state_id')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </li>

                </ul>

            </div>

        </div>


        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <label for="exampleFormControlInput1" class="tx-17"> إسم المحلية</label>
            <input type="text" required class="form-control w-12" id="exampleFormControlInput1" placeholder=""
                wire:model="name">
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

    </div>
    <div class="row">
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <input type="hidden" wire:model="locality_id">
            <button type="submit" class="btn btn-dark btn-sm">تعديل</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">إلغاء</button>
        </div>
    </div>
</form>

<script>
   /* document.addEventListener("DOMContentLoaded", () => {
       // $('#state_id').select2('data', {id: '1049', text: 'MyLabel'});

        //$('#state_id').val(1);

        $('#state_id').on('change', function(e) {
            var data = $('#state_id').select2("val");
            @this.set('state_id', data);
            //alert(data);
        });

        window.addEventListener('contentChanged', event => {

            $('#state_id').on('change', function(e) {
                var data = $('#state_id').select2("val");
                @this.set('state_id', data);
            });

        });
    });*/
</script>

