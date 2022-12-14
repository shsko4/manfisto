<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-item')
    @else
        @include('livewire.create-item')
    @endif
    <div class="mt-8" style="height: 400px; overflow: scroll">
        <livewire:item-list-livewire searchable="items.name,categories.name" hideable="inline" />
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
                $('#category_id').select2({
                    placeholder: "إختر نوع السلعه",
                    allowClear: true,
                    width: 'resolve'
                });

                $('#category_id').on('change', function(e) {
                    var data = $('#category_id').select2("val");
                    @this.set('category_id', data);
                    //alert(data);
                });

                window.addEventListener('contentChanged', event => {

                    $('#category_id').on('change', function(e) {
                        //alert();
                        var data = $('#category_id').select2("val");
                        @this.set('category_id', data);
                    });

                });
            });
        </script>


    <!--/div-->
</div>
