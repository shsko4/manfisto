<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update-penalty')
    @else
        @include('livewire.create-penalty')
    @endif
    <div class="mt-3">
        <table class="table table-hover" data-page-length='50' style=" text-align: center;">
            <thead>
                <tr>
                    <th style="width: auto">رقم المخالفة</th>
                    <th>إسم المخالفة</th>

                    <th width="150px">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penaltytypes as $penaltytype)
                    <tr>
                        <td>{{ $penaltytype->id }}</td>
                        <td>{{ $penaltytype->name }}</td>

                        <td>
                            <button wire:click="edit({{ $penaltytype->id }})" class="btn btn-sm btn-info">
                                <i class="las la-pen"></i>
                            </button>
                            @can('delete', $penaltytype)
                                <a href="#" class="modal-effect btn btn-sm btn-danger"
                                    wire:click="confirmPenDel({{ $penaltytype->id }})"
                                    data-penaltytype_id="{{ $penaltytype->id }}">

                                    <i class="las la-trash"></i>
                                </a>
                            @endcan

                            <!--<a  class="btn btn-danger btn-sm" data-toggle="modal" href="#modaldemo9" data-penaltytype_id="{{ $penaltytype->id }}">مسح</a>-->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- delete -->
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف نوع مخالفة</h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>هل انت متاكد من عملية الحذف ؟</p><br>
                    <input type="hidden" name="id" id="id" wire:model='penaltytype_id'>

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
