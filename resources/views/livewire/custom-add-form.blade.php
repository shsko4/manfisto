<div>

    <div class="row justify-content-center">
        <form method="POST">
            <div class="row">
                <!-------------->
                <div class="col">
                    <label for="name">الإسم <span class="tx-danger">*</span></label>
                    <input type="text" required class="form-control" placeholder="" wire:model="name" id='name'
                        name='name' required>

                    @error('name')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror

                    <input type="hidden" required class="form-control" placeholder="" wire:model="custom_id"
                        id='custom_id' name='custom_id' required>
                </div>
                <!-------------->
                <div class="col-span-5">
                    <label for="cert_no">رقم الشهادة الجمركية <span class="tx-danger">*</span></label>
                    <input type="text" required class="form-control" placeholder="" wire:model="cert_no"
                        id='cert_no' name='cert_no' required>

                    @error('cert_no')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <!-------------->
                <div class="col-span-7 mr-2">
                    <label for="cert_recipt_no"> الإيصال الجمركي <span class="tx-danger">*</span></label>
                    <div style="color: #40c717" class="la-ball-spin-fade la-sm" wire:loading
                        wire:target="cert_recipt_no">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <input type="number" required class="form-control" placeholder="" wire:model="cert_recipt_no"
                        id='cert_recipt_no' name='cert_recipt_no' required>

                    @error('cert_recipt_no')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <!-------------->
                <div class="col-md-3">

                    <label for="nolon">قيمة الشهادة</label>

                    <input type="number" required class="form-control" placeholder="0" wire:model="nolon"
                        id='nolon' name='nolon' value="0" readonly>

                    @error('nolon')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

            </div>

            <div class="row mt-2">

                <!-------------->
                <div class="col-md-3">
                    <label for="stamp">دمغة</label>
                    <input type="number" required class="form-control" placeholder="0" wire:model="stamp"
                        id='stamp' name='stamp' value="0" readonly>

                    @error('stamp')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <!-------------->
                <div class="col-md-3">

                    <label for="bpt">ارباح أعمال</label>
                    <input type="number" required class="form-control" placeholder="0" wire:model="bpt" id='bpt'
                        name='bpt' value="0" readonly>

                    @error('bpt')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <!-------------->
                <div class="col-md-3">

                    <label for="vat">قيمة مضافة</label>
                    <input type="number" required class="form-control" placeholder="0" wire:model="vat" id='vat'
                        name='vat' value="0" readonly>

                    @error('vat')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <!-------------->
                <div class="col-md-3">

                    <label for="total">المجموع</label>
                    <input type="number" required class="form-control" placeholder="0" wire:model="total"
                        id='total' name='total' value="0" readonly>

                    @error('total')
                        <div>
                            <span class="text-danger mt-2">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

            </div>

            <div class="row mt-3">
                <div class="col">
                    @can('add_cert', \App\Models\Custom::find($custom_id))
                        <button type="submit" wire:click.prevent="store()" class="btn btn-success btn-icons">حفظ</button>
                    @endcan

                    <button type="button" wire:click.prevent="resetInputFields()"
                        class="btn btn-secondary btn-icons">مسح الحقول</button>
                    <button type="button" wire:click.prevent="resetandback()"
                        class="btn btn-dark btn-icons">رجوع</button>


                </div>

            </div>

        </form>
    </div>
    <div class="mt-5">
        <livewire:custom-certificate searchable="name,serial" hideable="inline" :custom_id="$custom_id" />
    </div>
</div>
