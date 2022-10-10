<div>

    <div class="row justify-content-center">
        <form method="POST">
            <div class="row">

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

            </div>

            <div class="row mt-2">

                <!-------------->
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



            </div>

            <div class="row mt-3">
                <div class="col">
                    <!--can('add_cert', \App\Models\Custom::find($custom_id))-->
                        <button type="submit" wire:click.prevent="store()" class="btn btn-success btn-icons">حفظ</button>
                    <!--endcan-->

                    <button type="button" wire:click.prevent="resetInputFields()"
                        class="btn btn-secondary btn-icons">مسح الحقول</button>
                    <button type="button" wire:click.prevent="resetInputFields()"
                        class="btn btn-dark btn-icons">رجوع</button>


                </div>

            </div>

        </form>
    </div>
    <div class="mt-5">
        <livewire:custom-certificate searchable="name,serial" exportable hideable="inline" :custom_id="$custom_id" />
    </div>
</div>
<!-- delete -->
<!-- Modal effects -->
<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">حذف سجل</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <p>هل انت متاكد من عملية الحذف ؟</p><br>
                <input type="hidden" name="trans_id" id="trans_id" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                <button wire:click.prevent='delete' class="btn btn-danger">تاكيد</button>
            </div>
        </div>

    </div>
</div>

<!--/div-->
