<div>
    <div class="alert alert-success row-sm text-center w-80 h-auto" wire:loading wire:target="setOwner">جاري التحميل.....
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (!$penaltyowner)
        <div class="m-3 text-center" style="width: auto">
            <div style="color: #40c717" class="la-line-scale la-2x" wire:loading>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <livewire:penalty-owner>
        </div>
    @else
        @include('livewire.penalty-add-form')
    @endif
    <!-- delete -->
    <div class="modal" id="modaldemo911">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف مُخالِف </h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
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
