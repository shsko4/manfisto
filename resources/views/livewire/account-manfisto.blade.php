<div>
    <div class="card" style="width: 400px">
        <div class="card-body">

            <div class="card-title d-flex justify-content-between">
                <div>منفستو</div>
                <div style="color: #40c717" class="la-line-scale align-middle" wire:loading>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div><button class="btn btn-sm btn-success" wire:click="$emit('addReciptRefresh')">تحديث</button>{{ $thedate }}</div>
            </div>
            @if (!count($manfistos))
                <div class="alert alert-success text-center text-bold">لاتوجد سجلات</div>
            @else
                @foreach ($manfistos as $manfisto)
                    @can('update', $manfisto)
                        <div class="list-group-item d-flex  align-items-center mb-1"
                            style="height: auto; {{$active == $manfisto->id ? 'background: rgb(163, 168, 166);':'background: rgb(175, 228, 195);'}} "
                            wire:click="$emit('manfisto_details','{{ $manfisto->id }}','{{ $manfisto->transporter->name }}','{{ $manfisto->man_no }}','{{ $manfisto->car_no }}','{{ $manfisto->dest }}','{{ $manfisto->vat }}','{{ $manfisto->bpt }}','{{ $manfisto->bpt2 }}','{{ $manfisto->total }}','{{ $manfisto->city->name }}')"
                            name="manDiv">
                            <div class="">
                                <div class="font-weight-semibold ml-3">
                                    <div>
                                        {{ $manfisto->transporter->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="mr-auto">
                                <a href="#" class="btn btn-sm btn-dark-gradient"
                                    wire:click="$emit('manfisto_details','{{ $manfisto->id }}','{{ $manfisto->transporter->name }}','{{ $manfisto->man_no }}','{{ $manfisto->car_no }}','{{ $manfisto->dest }}','{{ $manfisto->vat }}','{{ $manfisto->bpt }}','{{ $manfisto->bpt2 }}','{{ $manfisto->total }}','{{ $manfisto->city->name }}')">
                                    {{ $manfisto->man_no }}{{ $thedate }}
                                </a>
                            </div>
                        </div>
                    @endcan
                @endforeach
            @endif


        </div>

    </div>
</div>
