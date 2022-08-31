<div>

    <div class="align-content-end" style="position: relative; align-content: initial">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px">2- إدخال بيانات المنفستو</div>
                    <div class="card-body">
                        <div class="m-3 text-center" style="width: auto">
                            <div style="color: #40c717" class="la-line-scale la-2x" wire:loading
                                wire:target='addManfisto'>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            @if ($errors->any())

                                <div id="err_div">
                                    <div class="alert alert-danger row-sm w-auto">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li wire:model='errDiv'>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <form wire:submit.prevent='addManfisto' autocomplete="off">
                                @csrf
                                @method('post')
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="transporter_name" style="font-size: 14px">الترحيلات</label>
                                        <input type="text" class="form-control" id="transporter_name"
                                            name="transporter_name"
                                            value="{{ old('transporter_name', session('tname')) }}"
                                            wire:model.debounce.500ms='transporter_name'  data-readonly required>

                                        <input type="hidden" class="form-control" id="transporter_id"
                                            name="transporter_id" value="{{ old('transporter_id', session('tid')) }}"
                                            wire:model.debounce.500ms='transporter_id'>
                                        <input type="hidden" class="form-control" id="user_id" name="user_id"
                                            value="77" wire:model.debounce.500ms='user_id'>
                                        <input type="hidden" class="form-control" id="user_id" name="user_id"
                                            value="77" wire:model.debounce.500ms='office_id'>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="man_no" style="font-size: 14px">رقم المنفستو</label>
                                        <input type="text" class="form-control" id="man_no" name="man_no"
                                            value="{{ old('man_no', session('tman_no')) }}" required
                                            wire:model.debounce.500ms='man_no'>
                                    </div>

                                    <!--  <div class="col">
                                        <label for="dest" style="font-size: 14px">الوجهه</label>
                                        <input type="text" class="form-control" id="dest" name="dest"
                                            required value="{{ old('dest') }}" wire:model.debounce.500ms='dest'>
                                    </div>-->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0" wire:ignore>
                                        <label for="city-dropdown">الوجهه</label>
                                        <select name="city-dropdown" id="city-dropdown" class="form-control select2"
                                            wire:model='city_id' required>
                                            <option label="إخر المدينة">
                                            </option>
                                            @foreach (App\Models\State::orderBy('name')->get() as $state)
                                                <optgroup label="{{ $state->name }}">

                                                    @foreach ($state->cities as $city)
                                                        <option value="{{ $city->id }}">
                                                            {{ $city->name }}
                                                        </option>
                                                    @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="car_no" style="font-size: 14px">رقم العربة</label>
                                        <input type="text" class="form-control" id="car_no" name="car_no"
                                            required value="{{ old('car_no') }}" wire:model.debounce.500ms='car_no'>
                                    </div>

                                    <div class="col">
                                        <label for="size" style="font-size: 14px">الحمولة</label>
                                        <input type="text" class="form-control" id="size" name="size"
                                            value="{{ old('size') }}" wire:model.debounce.500ms='size'>
                                    </div>

                                    <div class="col">
                                        <label for="nolon" style="font-size: 14px">النولون</label>
                                        <input type="number" class="form-control" id="nolon" name="nolon"
                                            required wire:model.debounce.500ms='nolon'>
                                    </div>

                                    <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading
                                        wire:target="nolon">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>

                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <label for="vat" style="font-size: 14px">قمية مضافة</label>
                                        <input type="text" class="form-control" id="vat" name="vat"
                                            placeholder="17%" readonly value="{{ old('vat') }}"
                                            wire:model.debounce.500ms='vat'>
                                    </div>

                                    <div class="col">
                                        <label for="bpt" style="font-size: 14px">أ.ع 1%</label>
                                        <input type="text" class="form-control" id="bpt" name="bpt"
                                            placeholder="1%" readonly value="{{ old('bpt') }}"
                                            wire:model.debounce.500ms='bpt'>
                                    </div>

                                    <div class="col">
                                        <label for="bpt2" style="font-size: 14px">دمغة 1%</label>
                                        <input type="text" class="form-control" id="bpt2" name="bpt2"
                                            placeholder="1%" readonly value="{{ old('bpt2') }}"
                                            wire:model.debounce.500ms='bpt2'>
                                    </div>
                                </div>
                                <div class="form-row mt-2">

                                    <script></script>
                                    <div class="form-group col-md-4">
                                        <label for="total" style="font-size: 14px">المجموع</label>
                                        <input type="" class="form-control" id="total" name="total"
                                            placeholder="المجموع" readonly value="{{ old('total') }}"
                                            wire:model.debounce.500ms='total'>
                                    </div>
                                </div>
                        </div>



                        <div class="modal-footer">


                        </div>
                        <div style="position: relative; right: 30%;">
                            <button class="btn btn-success" type="submit" id="add-btn"
                                wire:loading.attr="disabled" wire:target="addManfisto">حفظ</button>
                            <button type="button" class="btn ripple btn-secondary"
                                wire:click.prevent="resetInputFields()">تفريغ الحقول</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container closed -->
    </div>
</div>
<script src="{{ URL::asset('assets/js/sweet-alert.js') }}"></script>
<script>
    function myFunction() {


        var nolon = parseFloat(document.getElementById("nolon").value);

        if (typeof nolon === 'undefined' || !nolon) {



            notif({
                msg: "يرجي ادخال مبلغ النولون بصورة صحيحة",
                type: "error",
                autohide: false
            });

        } else {
            var vat = (nolon * 17) / 100;
            var bpt = (nolon * 1) / 100;
            var bpt2 = (nolon * 1) / 100;
            var total = vat + bpt + bpt2;

            document.getElementById("vat").value = vat;
            document.getElementById("bpt").value = bpt;
            document.getElementById("bpt2").value = bpt2;
            document.getElementById("total").value = total;
        }

    }

    @if ($errors->any())
        <
        script >
            window.onload = function() {
                notif({
                    type: "error",
                    msg: "خطأ!",
                    position: "center",
                    autohide: false,

                })
            }
    @endif
    @if (session()->has('success'))
        <
        script >
            window.onload = function() {
                notif({
                    msg: "{{ session('success') }}",
                    type: "success"
                })
            }
    @endif
</script>

<script>

    document.addEventListener("DOMContentLoaded", () => {
        $('#city-dropdown').select2();

        $('#city-dropdown').on('change', function(e) {
            var data = $('#city-dropdown').select2("val");
            @this.set('city_id', data);
            //alert(data);
        });

        window.addEventListener('contentChanged', event => {

            $('#city-dropdown').on('change', function(e) {
                var data = $('#city-dropdown').select2("val");
                @this.set('city_id', data);
            });

        });
    });
</script>
</div>
