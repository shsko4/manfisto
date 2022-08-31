<form method="POST" action="{{ route('penalty.update',$penalty) }}" name="penupdateform">
    @method('PUT')
    @csrf
    <div class="row">

        <div class="col">

            <!-------------->
            <label for="name">الإسم <span class="tx-danger">*</span></label>
            <input type="text" required class="form-control" placeholder=""
                id='penaltyowner_name' name='penaltyowner_name' readonly value="{{ $penalty->penaltyowner->name }}">

            @error('penaltyowner_name')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <!-------------->
        <div class="col">
            <label for="penalty_type_id">نوع المخالفة <span class="tx-danger">*</span></label>

            <select class="form-control  nice-select  custom-select" required=""
                id='penalty_type_id' name='penalty_type_id'>
                <option selected>--اختر--</option>
                @foreach (\App\Models\PenaltyType::where('office_id', auth()->user()->office_id)->get() as $penaltytype)
                    <option value={{ $penaltytype->id }}
                        {{  $penalty->penaltytype->id == $penaltytype->id ? 'selected' : '' }}>
                        {{ $penaltytype->name }}
                    </option>
                @endforeach
            </select>

            @error('penalty_type_id')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="col">

            <!-------------->
            <label for="location">الموقع</label>
            <input type="text" required class="form-control" placeholder=""
                id='location' name='location' value="{{ $penalty->location }}">

            @error('location')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-3">
            <!-------------->
            <label for="vat">قيمة مضافة</label>
            <input type="number" required class="form-control" placeholder="0" id="vat"
                name='vat' value="{{ $penalty->vat }}" onchange="totalcalc();">

            @error('vat')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col-md-3">
            <!-------------->
            <label for="penalty_amount">غرامة مالية</label>
            <input type="number" class="form-control" placeholder="0"
                id='penalty_amount' name='penalty_amount' value="{{ $penalty->penalty_amount }}" onchange="totalcalc();">

            @error('penalty_amount')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col-md-3">
            <!-------------->
            <label for="stamp">دمغة</label>
            <input type="number" class="form-control" placeholder="0"  id='stamp'
                name='stamp' value="{{ $penalty->stamp }}" onchange="totalcalc();">

            @error('stamp')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="col-md-3">
            <label for="total">المجموع</label>
            <input type="number" class="form-control" readonly placeholder=""  id='total'
                name='total' value="{{ $penalty->total }}">

            @error('total')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
    </div>
    <div class="row mt-3">


    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="note">ملاحظات</label>
            <textarea class="form-control" placeholder="" id='note' name='note' rows="5"
                cols="5">{{ $penalty->note }}</textarea>

            @error('note')
                <div>
                    <span class="text-danger mt-2">{{ $message }}</span>
                </div>
            @enderror
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success btn-icons">تعديل</button>
            <a href="{{ route('penalty.index') }}" class="btn btn-secondary btn-icons">إلغاء</a>
        </div>

    </div>
<script>
function totalcalc(){

var vat = Number(document.getElementById("vat").value);
var stamp = Number(document.getElementById("stamp").value);
var penalty_amount = Number(document.getElementById("penalty_amount").value);
document.getElementById("total").setAttribute('value',Number(vat + stamp + penalty_amount));
}
</script>

</form>

