<div>
    <div class="alert alert-success row-sm text-center w-80 h-auto" wire:loading wire:target="setOwner">جاري التحميل.....
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (!$model_owner)
        <div class="m-3 text-center">
            <div style="color: #40c717" class="la-line-scale la-2x" wire:loading>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <livewire:stock-recipt-owner>
        </div>
    @else
        <div>
            <div class="card-title">
                <span class="text-green-700">{{ $driver_name }}</span> <span>{{ $car_no }}</span>
            </div>
            <div>
                @include('livewire.stock-recipt-add-form')
            </div>

        </div>
    @endif

</div>
