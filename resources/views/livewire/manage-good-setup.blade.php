<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-good-setup')
    @else
        @include('livewire.create-good-setup')
    @endif
    <div class="mt-8" style="height: 400px; overflow: scroll">
        <livewire:good-setup-list searchable="items.name,units.name" hideable="inline" />
    </div>

    <!-- delete -->
    <div class="modal" id="modalDelete">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $('#item_id').select2({
                placeholder: "إختر البضاعة",
                allowClear: true,
                width: 'resolve'
            });

            $('#item_id').on('change', function(e) {
                var data = $('#item_id').select2("val");
                @this.set('item_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#item_id').on('change', function(e) {
                    //alert();
                    var data = $('#item_id').select2("val");
                    @this.set('item_id', data);
                });

            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            $('#the_unit').select2({
                placeholder: "إختر الوحدة",
                allowClear: true,
                width: 'resolve'
            });

            $('#the_unit').on('change', function(e) {
                var data = $('#the_unit').select2("val");
                @this.set('unit_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#the_unit').on('change', function(e) {
                    //alert();
                    var data = $('#the_unit').select2("val");
                    @this.set('unit_id', data);
                });

            });
        });
    </script>
    <!--/div-->
</div>
