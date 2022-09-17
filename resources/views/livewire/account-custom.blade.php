<div>
    <div class="card" style="width: 400px">
        <div class="card-body">

            <div class="card-title d-flex justify-content-between">
                <div>شهادات جمركية</div>
                <div style="color: #40c717" class="la-line-scale align-middle" wire:loading>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div><button class="btn btn-sm btn-success" wire:click="$emit('addReciptRefresh')">تحديث</button></div>
            </div>
            @if (!count($customs))
                <div class="alert alert-success text-center text-bold">لاتوجد سجلات</div>
            @else
                <?php
                $customs_count = 0;
                ?>

                @foreach ($customs as $custom)
                    @can('update', $custom)
                        <?php
                        $customs_count++;
                        ?>

                        <div class="list-group-item d-flex  align-items-center mb-1"
                            style="height: auto; {{ $active == $custom->id ? 'background: rgb(163, 168, 166);' : 'background: rgb(175, 228, 195);' }} "
                            wire:click="$emit('custom_details','{{ $custom->id }}')" name="manDiv">
                            <div class="">
                                <div class="font-weight-semibold ml-3">
                                    <div>
                                        {{ $custom->driver_name }}
                                        <span class="text-secondary text-xs mr-4">
                                            @if (!$thedate)
                                                {{ date_format($custom->created_at, 'Y/m/d') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="mr-auto">
                                <a href="#" class="btn btn-sm btn-dark-gradient"
                                    wire:click="$emit('custom_details','{{ $custom->id }}')">
                                    {{ $custom->total_tax_amount }}{{ $thedate }}
                                </a>
                            </div>
                        </div>
                    @endcan
                @endforeach
                @if ($customs_count == 0)
                    <div class="alert alert-success text-center text-bold">لاتوجد سجلات</div>
                @endif
            @endif


        </div>

    </div>
</div>
