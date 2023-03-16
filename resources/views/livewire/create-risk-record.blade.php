<form wire:submit.prevent="store()" style="width: 950px">
    <div class="row" >
        <div class="col-span-12 ml-3">
            <label for="exampleFormControlInput1" class="tx-17">الوصف</label>
            <input type="text" required class="form-control w-12" id="exampleFormControlInput1" placeholder=""
                wire:model="description">
            <div>
                @error('description')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class="col-span-5 ml-3">
            <label for="select-beast" class="tx-17">النوع</label>
            <select name="risk_type_id" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="risk_type_id" required>
                <option value="null">
                    --إختر النوع--
                </option>
                @foreach (App\Models\RiskType::orderBy('name')->get() as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>

            <div>
                @error('risk_type_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-span-5 ml-3">
            <label for="select-beast" class="tx-17">الحزمة</label>
            <select name="risk_type_id" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="risk_batch_id" required>
                <option value="null">
                    --إختر الحزمة--
                </option>
                @foreach (App\Models\RiskBatch::orderBy('id')->get() as $batch)
                    <option value="{{ $batch->id }}">
                        {{ $batch->start_date.'->'.$batch->end_date }}
                    </option>
                @endforeach
            </select>

            <div>
                @error('risk_batch_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-span-5 ml-3">
            <label for="select-beast" class="tx-17">الحاله</label>
            <select name="status" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="status" required>
                <option value="نشط">نشط</option>
                <option value="غير نشط">غير نشط</option>
            </select>

            <div>
                @error('status')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-span-5 ml-3">
            <label for="select-beast" class="tx-17">درجة الخطوره</label>
            <select name="risk_degree_id" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="risk_degree_id" required>
                <option value="null">
                    --درجة الخطوره--
                </option>
                @foreach (App\Models\RiskDegree::orderBy('name')->get() as $degree)
                    <option value="{{ $degree->id }}">
                        {{ $degree->name }}
                    </option>
                @endforeach
            </select>

            <div>
                @error('risk_degree_id')
                    <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-span-5 ml-3">
            <label for="select-beast" class="tx-17">إمكانية الحدوث</label>
            <select name="risk_possibility_id" id="select-beast" class="form-control  nice-select  custom-select"
                wire:model="risk_possibility_id" required>
                <option value="null">
                    --إختر--
                </option>
                @foreach (App\Models\RiskPossibility::orderBy('name')->get() as $possibility)
                    <option value="{{ $possibility->id }}">
                        {{ $possibility->name }}
                    </option>
                @endforeach
            </select>

            <div>
                @error('risk_possibility_id')
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
