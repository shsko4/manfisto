<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-city')
    @else
        @include('livewire.create-city')
    @endif
    <div class="mt-8" style="height: 400px; overflow: scroll">
        <livewire:city-livewire  searchable="name" hideable="inline"/>
    </div>

    <!-- delete -->
    <div class="modal" id="modalDeleteCity">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف مدينة </h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>هل انت متاكد من عملية الحذف ؟</p><br>
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
