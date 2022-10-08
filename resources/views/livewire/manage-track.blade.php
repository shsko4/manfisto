<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-track')
    @else
        @include('livewire.create-track')
    @endif
    <div class="mt-8" style="height: 400px; overflow: scroll">
        <livewire:track-list-livewire searchable="name" hideable="inline"/>
    </div>

    <!-- delete -->
    <div class="modal" id="modalDelete">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف</h6><button aria-label="Close" class="close"
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
    <script>

        document.addEventListener("DOMContentLoaded", () => {
            $('#from_city_id').select2({
                placeholder: "إختر المدينة",
                allowClear: true,
                width: 'resolve'
            });

            $('#from_city_id').on('change', function(e) {
                var data = $('#from_city_id').select2("val");
                @this.set('from_city_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#from_city_id').on('change', function(e) {
                    //alert();
                    var data = $('#from_city_id').select2("val");
                    @this.set('from_city_id', data);
                });

            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            $('#to_city_id').select2({
                placeholder: "إختر المدينة",
                allowClear: true,
                width: 'resolve'
            });

            $('#to_city_id').on('change', function(e) {
                var data = $('#to_city_id').select2("val");
                @this.set('to_city_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#to_city_id').on('change', function(e) {
                    //alert();
                    var data = $('#to_city_id').select2("val");
                    @this.set('to_city_id', data);
                });

            });
        });
    </script>
    <!--/div-->
</div>

