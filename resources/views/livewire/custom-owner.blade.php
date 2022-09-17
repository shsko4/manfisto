<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div  class="row justify-content-center">
        @if ($updateMode)
            @include('livewire.update-custom-owner')
        @else
            @include('livewire.create-cutom-owner')
        @endif
    </div>

    <div class="row mt-8" style="width: auto">
        <livewire:custom-owner-list searchable="driver_name,car_no" exportable hideable="inline" />
    </div>

    <!-- delete -->
    <div class="modal" id="modaldemo911">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف سجل </h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>هل انت متاكد من عملية الحذف ؟</p><br>
                    <input type="hidden" name="id" id="id" wire:model='penaltyowner_id'>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="button" wire:click.prevent='delete' class="btn btn-danger">تاكيد</button>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
</div>
