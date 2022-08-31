<div>
    <div class="align-content-center" style="position: relative; right: 110px;">
        <p><input type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('penRefresh')" value="تحديث" />
        </p>
    </div>
    <!--<div wire:poll='shs'></div>-->
    @foreach ($penalties as $penalty)
        <div class="list-group-item d-flex  align-items-center" style="height: auto">

            <div class="">
                <div class="font-weight-semibold ml-3">

                    <div>

                        {{ $penalty->penaltyowner->name }} </div>
                </div>
            </div>
            <div class="mr-auto">

                <a href="#" class="btn btn-sm btn-dark-gradient" data-toggle="modal" data-target="#penaltychatmodel"
                    data-owner_name="{{ $penalty->penaltyowner->name }}" data-penaltytype="{{ $penalty->penaltytype->name }}"
                    data-location="{{ $penalty->location }}" data-vat="{{ $penalty->vat }}"
                    data-stamp="{{ $penalty->stamp }}" data-penalty_amount="{{ $penalty->penalty_amount }}"
                    data-username="{{ $penalty->user->name }}"
                    data-recipt_no="{{ $penalty->recipt_no }}"
                    data-total="{{ $penalty->total }}">
                    {{  $penalty->total }}
                </a>
                @can('تعديل مخالفة')
                @endcan

                @can('update', $penalty)
                    <a href="{{ route('penalty.edit',$penalty) }}" class="btn btn-sm btn-info" title="تعديل"
                        data-effect="effect-scale" data-penalty_id="{{ $penalty->id }}" data-btn_type='edit'>
                        <i class="las la-pen"></i></a>
                @endcan


                @can('حذف مخالفة')
                @endcan

                @can('delete', $penalty)
                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                        data-model_id="{{ $penalty->id }}" data-toggle="modal"
                        href="#pendelet" title="حذف" data-btn_type='add'><i class="las la-trash"></i></a>
                @endcan

            </div>



        </div>
    @endforeach
</div>
