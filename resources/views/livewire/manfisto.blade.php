<div>
    <div class="align-content-center" style="position: relative; right: 110px;">
        <p><input type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('manRefresh')" value="تحديث" />
        </p>
    </div>
    <!--<div wire:poll='shs'></div>-->
    @foreach ($manfistos as $manfisto)
        <div class="list-group-item d-flex  align-items-center" style="height: auto">

            <div class="">
                <div class="font-weight-semibold ml-3">

                    <div>

                        {{ $manfisto->transporter->name }} </div>
                </div>
            </div>
            <div class="mr-auto">

                <a href="#" class="btn btn-sm btn-dark-gradient" data-toggle="modal" data-target="#chatmodel"
                    data-transporter_name="{{ $manfisto->transporter->name }}" data-man_no="{{ $manfisto->man_no }}"
                    data-dest="{{ $manfisto->city->name }}" data-car_no="{{ $manfisto->car_no }}"
                    data-nolon="{{ $manfisto->nolon }}" data-bpt2="{{ $manfisto->bpt2 }}"
                    data-size="{{ $manfisto->size }}" data-vat="{{ $manfisto->vat }}" data-bpt="{{ $manfisto->bpt }}"
                    data-total="{{ $manfisto->vat + $manfisto->bpt + $manfisto->bpt2 }}"
                    data-username="{{ $manfisto->user->name }}" data-size="{{ $manfisto->size }}">
                    {{ $manfisto->man_no }}
                </a>
                @can('تعديل منفستو')
                @endcan

                @can('update', $manfisto)
                    <a href="{{ route('manfisto.edit', $manfisto->id) }}" class="btn btn-sm btn-info" title="تعديل"
                        data-effect="effect-scale" data-trans_id="{{ $manfisto->id }}" data-btn_type='edit'
                        data-tin="{{ $manfisto->tin }}" data-name="{{ $manfisto->name }}"
                        data-email="{{ $manfisto->email }}" data-phone="{{ $manfisto->phone }}">
                        <i class="las la-pen"></i></a>
                @endcan


                @can('حذف منفستو')
                @endcan

                @can('delete', $manfisto)
                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                        data-model_id="{{ $manfisto->id }}" data-trans_name="{{ $manfisto->name }}" data-toggle="modal"
                        href="#mandelet" title="حذف" data-btn_type='add'><i class="las la-trash"></i></a>
                @endcan

            </div>



        </div>
    @endforeach
</div>
