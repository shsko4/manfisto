<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-manfisto-setup')
    @else
        @include('livewire.create-manfisto-setup')
    @endif
    <div class="mt-8" style="height: 400px; overflow: scroll">
        <livewire:manfisto-setup-list searchable="tracks.name,loads.name" hideable="inline"/>
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
            $('#track_id').select2({
                placeholder: "إختر المسار",
                allowClear: true,
                width: 'resolve'
            });

            $('#track_id').on('change', function(e) {
                var data = $('#track_id').select2("val");
                @this.set('track_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#track_id').on('change', function(e) {
                    //alert();
                    var data = $('#track_id').select2("val");
                    @this.set('track_id', data);
                });

            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            $('#load_id').select2({
                placeholder: "إختر الحمولة",
                allowClear: true,
                width: 'resolve'
            });

            $('#load_id').on('change', function(e) {
                var data = $('#load_id').select2("val");
                @this.set('load_id', data);
                //alert(data);
            });

            window.addEventListener('contentChanged', event => {

                $('#load_id').on('change', function(e) {
                    //alert();
                    var data = $('#load_id').select2("val");
                    @this.set('load_id', data);
                });

            });
        });
    </script>
    <!--/div-->
</div>


