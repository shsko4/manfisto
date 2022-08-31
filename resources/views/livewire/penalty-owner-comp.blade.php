<div style="width:auto ; height: 300px; overflow-x: scroll">
    <table class="table table-hover"  data-page-length='50' style=" text-align: center;" id="example1">
        <thead>
            <tr>
                <th style="width: auto">الإسم</th>
                <th>نوع الهوية</th>
                <th>رقم الهوية</th>

                <th width="150px">العمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penaltyownerscopm as $penaltyowner)
                <tr>
                    <td>{{ $penaltyowner->name }}</td>
                    <td>{{ $penaltyowner->TypeOfId->name }}</td>
                    <td>{{ $penaltyowner->id_no }}</td>

                    <td>
                        <button wire:click="$emit('editPO','{{ $penaltyowner->id }}')"
                            class="btn btn-sm btn-info"><i class="las la-pen"></i></button>
                        <a href="#" class="modal-effect btn btn-sm btn-danger"
                            wire:click="$emit('confirmPenDel','{{ $penaltyowner->id }}')"
                            data-penaltyowner="{{ $penaltyowner->id }}"><i class="las la-trash"></i></a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
