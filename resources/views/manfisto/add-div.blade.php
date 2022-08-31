<div class="align-items-center" style="position: relative; ">
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="font-size: 25px"> بيانات المنفستو </div>
                    @if ($errors->any())
                        <div id="err_div">
                            <div class="alert alert-danger row-sm w-auto">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('manfisto.store') }}" method="POST" autocomplete="off">
                        @csrf
                        @method('post')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="transporter_name" style="font-size: 20px">الترحيلات</label>
                                <input type="text" class="form-control" id="transporter_name" name="transporter_name"
                                    required readonly value="{{ old('transporter_name', session('tname')) }}">

                                <input type="hidden" class="form-control" id="transporter_id" name="transporter_id"
                                    value="{{ old('transporter_id', session('tid')) }}">
                                <input type="hidden" class="form-control" id="user_id" name="user_id"
                                    value="{{ auth()->user()->id }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="man_no" style="font-size: 20px">رقم المنفستو</label>
                                <input type="text" class="form-control" id="man_no" name="man_no" required
                                    value="{{ old('man_no', session('tman_no')) }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="dest" style="font-size: 20px">الوجهه</label>
                                <input type="text" class="form-control" id="dest" name="dest" required
                                    value="{{ old('dest') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="car_no" style="font-size: 20px">رقم العربة</label>
                                <input type="text" class="form-control" id="car_no" name="car_no" required
                                    value="{{ old('car_no') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="size" style="font-size: 20px">الحمولة</label>
                                <input type="text" class="form-control" id="size" name="size"
                                    value="{{ old('size') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="nolon" style="font-size: 20px">النولون</label>
                                <input type="number" class="form-control" id="nolon" name="nolon" required
                                    oninput="myFunction()" value="{{ old('nolon') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="vat" style="font-size: 20px">قمية مضافة</label>
                                <input type="text" class="form-control" id="vat" name="vat"
                                    placeholder="17%" readonly value="{{ old('vat') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="bpt" style="font-size: 20px">أ.ع 1%</label>
                                <input type="text" class="form-control" id="bpt" name="bpt"
                                    placeholder="1%" readonly value="{{ old('bpt') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="bpt2" style="font-size: 20px">أ.ع 1%</label>
                                <input type="text" class="form-control" id="bpt2" name="bpt2"
                                    placeholder="1%" readonly value="{{ old('bpt2') }}">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="total" style="font-size: 20px">المجموع</label>
                                <input type="" class="form-control" id="total" name="total"
                                    placeholder="المجموع" readonly value="{{ old('total') }}">
                            </div>


                        </div>
                        <div class="modal-footer">


                        </div>
                        <div style="position: relative; right: 30%;">
                            <button class="btn btn-primary" type="submit" id="add-btn">حفظ</button>
                            <a class="btn ripple btn-secondary" href="{{ route('manfisto.index') }}">رجوع</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container closed -->
</div>
