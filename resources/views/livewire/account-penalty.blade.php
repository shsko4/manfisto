<div>
    <div class="card" style="width: 400px">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between">
                <div>المخالفات</div>
                <div style="color: #40c717" class="la-line-scale align-middle" wire:loading >
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div><button class="btn btn-sm btn-success" wire:click="$emit('addReciptRefresh')">تحديث</button></div>
            </div>
            @if (!count($penalties))
                <div class="alert alert-success text-center text-bold">لاتوجد سجلات</div>
            @else
                @foreach ($penalties as $penalty)
                    @can('update', $penalty)
                        <div class="list-group-item d-flex  align-items-center mb-1"
                            style="height: auto; {{$active == $penalty->id ? 'background: rgb(163, 168, 166);':'background: rgb(175, 228, 195);'}} "
                            wire:click="$emit('penalty_details','{{ $penalty->id }}','{{ $penalty->penaltyowner->name }}','{{ $penalty->penaltytype->name }}','{{ $penalty->vat }}','{{ $penalty->penalty_amount }}','{{ $penalty->stamp }}','{{ $penalty->total }}')"
                            name="manDiv">
                            <div class="">
                                <div class="font-weight-semibold ml-3">
                                    <div>
                                        {{ $penalty->penaltyowner->name }}
                                        <span class="text-secondary text-xs mr-4">
                                            @if (!$thedate)
                                                {{ date_format($penalty->created_at, 'Y/m/d') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mr-auto">
                                <a href="#" class="btn btn-sm btn-dark-gradient"
                                    wire:click="$emit('penalty_details','{{ $penalty->id }}','{{ $penalty->penaltyowner->name }}','{{ $penalty->penaltytype->name }}','{{ $penalty->vat }}','{{ $penalty->penalty_amount }}','{{ $penalty->stamp }}','{{ $penalty->total }}')">
                                    {{ $penalty->total }}
                                </a>
                            </div>
                        </div>
                    @endcan
                @endforeach
            @endif


        </div>

    </div>
</div>
